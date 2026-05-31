(() => {
  const board = document.getElementById("calendarBoard");
  const timeLabels = document.getElementById("timeLabels");
  const periodToggle = document.querySelector("[data-period-toggle]");
  const filterButtons = document.querySelectorAll(".filter-btn");
  const viewButtons = document.querySelectorAll(".view-btn");
  const calendarHeads = document.getElementById("calendarHeads");
  const weekGrid = document.getElementById("weekGrid");
  const rangeBtn = document.querySelector(".range-btn");
  const filterYear = document.querySelector(".fillter-year");
  const filterYearButtons = document.querySelectorAll(".fillter-year button");
  const searchDateInput = document.getElementById("searchDate");
  const monthBox = document.querySelector(".fillter-month");
  const monthBtn = document.querySelector(".month-btn");
  const monthButtons = document.querySelectorAll(".fillter-month button");
  const todayBtn = document.querySelector(".today-btn");
  const headerTitle = document.querySelector(".month-box h3");

  if (!board || !calendarHeads || !weekGrid) return;

  const monthNamesShort = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
  const dayNamesShort = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

  const state = {
    period: board.dataset.period || "am",
    filter: board.dataset.filter || "all",
    view: document.querySelector(".view-btn.active")?.dataset.view || "daily",
    startDate: null,
    columns: 7,
    selectedYear: null,
    selectedMonth: null,
    selectedWeek: null,
    searchDate: null,
  };

  let activeEvent = null;
  let renderRaf = 0;

  const pad = (n) => String(n).padStart(2, "0");

  const sameDate = (a, b) =>
    a &&
    b &&
    a.getFullYear() === b.getFullYear() &&
    a.getMonth() === b.getMonth() &&
    a.getDate() === b.getDate();

  const startOfWeek = (d) => {
    const x = new Date(d);
    const diff = (x.getDay() + 6) % 7;
    x.setDate(x.getDate() - diff);
    x.setHours(0, 0, 0, 0);
    return x;
  };

  const startOfMonth = (d) => new Date(d.getFullYear(), d.getMonth(), 1);
  const startOfYear = (d) => new Date(d.getFullYear(), 0, 1);
  const daysInMonth = (d) => new Date(d.getFullYear(), d.getMonth() + 1, 0).getDate();

  const formatDateShort = (d) => `${pad(d.getDate())} ${monthNamesShort[d.getMonth()]}`;
  const formatDayLabel = (d) => `${dayNamesShort[d.getDay()]} ${pad(d.getDate())}`;

  const daysBetween = (a, b) => {
    const ua = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
    const ub = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());
    return Math.round((ub - ua) / 86400000);
  };

  const getEvents = () => Array.from(document.querySelectorAll("[data-event]"));

  function parseTimeRange(text) {
    if (!text) return { startHour: 1, duration: 1 };

    const clean = text.replace(/\s+/g, " ").trim();
    const match = clean.match(
      /(\d{1,2})(?::(\d{2}))?\s*(AM|PM)?\s*-\s*(\d{1,2})(?::(\d{2}))?\s*(AM|PM)?/i
    );

    if (!match) return { startHour: 1, duration: 1 };

    const sh = Number(match[1]);
    const sm = Number(match[2] || 0);
    const sp = (match[3] || "AM").toUpperCase();
    const eh = Number(match[4]);
    const em = Number(match[5] || 0);
    const ep = (match[6] || sp).toUpperCase();

    const toMinutes = (h, m, meridiem) => {
      let hour = h % 12;
      if (meridiem === "PM") hour += 12;
      if (meridiem === "AM" && h === 12) hour = 0;
      return hour * 60 + m;
    };

    const startMinutes = toMinutes(sh, sm, sp);
    let endMinutes = toMinutes(eh, em, ep);

    if (endMinutes <= startMinutes) endMinutes += 12 * 60;

    return {
      startHour: sh === 0 ? 12 : sh,
      duration: Math.max(1, Math.ceil((endMinutes - startMinutes) / 60)),
    };
  }

  function getEventInfo(event) {
    let date = null;

    if (event.dataset.date) {
      const d = new Date(event.dataset.date);
      if (!isNaN(d)) {
        d.setHours(0, 0, 0, 0);
        date = d;
      }
    }

    const timeText = event.querySelector(".event-time")?.textContent?.trim() || "";
    const { startHour, duration } = parseTimeRange(timeText);

    return {
      date,
      period: (event.dataset.period || "am").toLowerCase(),
      type: (event.dataset.type || "").toLowerCase(),
      startHour,
      duration,
    };
  }

  function getBaseDate() {
    if (board.dataset.start) {
      const d = new Date(board.dataset.start);
      if (!isNaN(d)) return d;
    }

    let earliest = null;
    for (const ev of getEvents()) {
      const info = getEventInfo(ev);
      if (!info.date) continue;
      if (!earliest || info.date < earliest) earliest = info.date;
    }

    return earliest || new Date();
  }

  function getViewStartDate(view) {
    const now = new Date();

    const year = state.selectedYear ?? now.getFullYear();
    const month = state.selectedMonth ?? now.getMonth();

    const base = new Date(year, month, 1);

    if (view === "daily") return startOfMonth(base);
    if (view === "weekly") return startOfWeek(base);
    if (view === "monthly") return new Date(year, 0, 1);

    return startOfWeek(base);
  }

  function buildTimeLabels(period) {
    if (!timeLabels) return;

    timeLabels.innerHTML = "";
    for (let hour = 1; hour <= 12; hour++) {
      const span = document.createElement("span");
      span.textContent = `${hour} ${period.toUpperCase()}`;
      timeLabels.appendChild(span);
    }

    if (periodToggle) {
      periodToggle.classList.toggle("active", period === "pm");
      const txt = periodToggle.querySelector(".period-toggle-text");
      if (txt) txt.textContent = period.toUpperCase();
    }
  }

  function getEventColumn(event) {
    const info = getEventInfo(event);
    if (!info.date) return 1;

    const start = state.startDate || getViewStartDate(state.view);

    if (state.view === "daily") {
      return daysBetween(start, info.date) + 1;
    }

    if (state.view === "weekly") {
      return Math.floor(daysBetween(start, info.date) / 7) + 1;
    }

    if (state.view === "monthly") {
      return info.date.getMonth() + 1;
    }

    return daysBetween(start, info.date) + 1;
  }

  function isInRange(event) {
    const col = getEventColumn(event);
    return col >= 1 && col <= state.columns;
  }

  function passesFilters(event) {
    const info = getEventInfo(event);
    if (!info.date) return false;

    if (state.selectedYear !== null && info.date.getFullYear() !== state.selectedYear) return false;
    if (state.selectedMonth !== null && info.date.getMonth() !== state.selectedMonth) return false;

    if (state.selectedWeek !== null) {
      const firstDay = new Date(info.date.getFullYear(), info.date.getMonth(), 1);
      const week = Math.ceil((info.date.getDate() + firstDay.getDay()) / 7);
      if (week !== state.selectedWeek) return false;
    }

    if (state.searchDate) {
      const target = new Date(state.searchDate);
      if (isNaN(target) || !sameDate(info.date, target)) return false;
    }

    const matchesPeriod = info.period === state.period;
    const matchesType = state.filter === "all" || info.type === state.filter;

    return matchesPeriod && matchesType && isInRange(event);
  }

  function bindEvents() {
    for (const event of getEvents()) {
      if (event.dataset.bound === "1") continue;
      event.dataset.bound = "1";

      event.addEventListener("mouseenter", () => {
        event.style.zIndex = "99999";
      });

      event.addEventListener("mouseleave", () => {
        if (activeEvent !== event) layoutOverlaps();
      });

      event.addEventListener("click", (e) => {
        e.stopPropagation();
        setActiveEvent(event);
      });
    }
  }

  function layoutOverlaps() {
    const groups = new Map();

    for (const event of getEvents()) {
      if (!passesFilters(event)) continue;

      const info = getEventInfo(event);
      const col = getEventColumn(event);
      const key = `${info.period}-${col}`;

      if (!groups.has(key)) groups.set(key, []);
      groups.get(key).push({
        event,
        start: info.startHour,
        end: info.startHour + info.duration - 1,
      });
    }

    for (const items of groups.values()) {
      items.sort((a, b) => a.start - b.start || a.end - b.end);

      const laneEnds = [];
      for (const item of items) {
        let lane = laneEnds.findIndex((lastEnd) => lastEnd < item.start);
        if (lane === -1) {
          lane = laneEnds.length;
          laneEnds.push(item.end);
        } else {
          laneEnds[lane] = item.end;
        }

        const shift = lane * 12;
        item.event.style.setProperty("--stack-x", `${shift}px`);
        item.event.style.setProperty("--stack-y", `${shift * 0.7}px`);
        item.event.style.zIndex = String(10 + lane);
      }
    }
  }

  function setActiveEvent(event) {
    if (activeEvent && activeEvent !== event) {
      activeEvent.classList.remove("active");
    }

    activeEvent = event;
    activeEvent.classList.add("active");
  }

  function clearActiveEvent() {
    if (!activeEvent) return;
    activeEvent.classList.remove("active");
    activeEvent = null;
  }

  function renderCalendarView(view) {
    state.view = view;

    const start = getViewStartDate(view);
    const today = new Date();
    let labels = [];
    let columns = 7;

    if (view === "daily") {
      const days = daysInMonth(start);
      columns = days;

      for (let i = 0; i < days; i++) {
        const d = new Date(start);
        d.setDate(start.getDate() + i);

        const isToday = sameDate(d, today);

        if (d.getDate() === 1) {
          labels.push(
            `<div class="month-start day-head ${isToday ? "active" : ""}">
              <div class="month-name">${monthNamesShort[d.getMonth()]}</div>
              <div class="day-label">${formatDayLabel(d)}</div>
            </div>`
          );
        } else {
          labels.push(
            `<div class="day-head ${isToday ? "active" : ""}">${formatDayLabel(d)}</div>`
          );
        }
      }
    } else if (view === "weekly") {
      columns = 4;

      for (let i = 0; i < 4; i++) {
        const s = new Date(start);
        s.setDate(start.getDate() + i * 7);
        const e = new Date(s);
        e.setDate(s.getDate() + 6);

        const isToday = today >= s && today <= e;

        labels.push(
          `<div class="day-head week-label ${isToday ? "active" : ""}">
            <div class="range">${formatDateShort(s)} - ${formatDateShort(e)}</div>
            <div class="sub">Week ${i + 1}</div>
          </div>`
        );
      }
    } else if (view === "monthly") {
      columns = 12;

      for (let i = 0; i < 12; i++) {
        const m = new Date(start.getFullYear(), i, 1);
        const isToday = i === today.getMonth();

        labels.push(
          `<div class="day-head ${isToday ? "active" : ""}">${monthNamesShort[m.getMonth()]} ${m.getFullYear()}</div>`
        );
      }
    } else {
      columns = 7;

      for (let i = 0; i < 7; i++) {
        const d = new Date(start);
        d.setDate(start.getDate() + i);
        const isToday = sameDate(d, today);

        labels.push(
          `<div class="day-head ${isToday ? "active" : ""}">${formatDayLabel(d)}</div>`
        );
      }
    }

    state.startDate = start;
    state.columns = columns;
    calendarHeads.innerHTML = labels.join("");

    const colWidth = 231;
    calendarHeads.style.gridTemplateColumns = `repeat(${columns}, ${colWidth}px)`;
    weekGrid.style.gridTemplateColumns = `repeat(${columns}, ${colWidth}px)`;
    calendarHeads.style.columnGap = "9px";
    weekGrid.style.columnGap = "9px";
    calendarHeads.style.rowGap = "0";
    weekGrid.style.rowGap = "0";
    weekGrid.style.backgroundSize = `${colWidth + 9}px 100%, 100% calc(100% / 12)`;
    weekGrid.style.backgroundPosition = `0 0, 0 0`;
  }

  function applyFilters() {
    for (const event of getEvents()) {
      const info = getEventInfo(event);

      if (!passesFilters(event)) {
        event.style.display = "none";
        event.classList.remove("active");
        if (activeEvent === event) activeEvent = null;
        continue;
      }

      const col = getEventColumn(event);

      event.style.display = "block";
      event.style.gridColumn = `${col} / span 1`;
      event.style.gridRow = `${info.startHour} / span ${info.duration}`;
      event.style.justifySelf = "stretch";
      event.style.alignSelf = "start";
      event.style.width = "220px";
      event.style.boxSizing = "border-box";

      const progress = Number(event.dataset.progress || 0);
      event.style.setProperty("--progress", `${Math.max(0, Math.min(100, progress))}%`);

      if (info.date) {
        event.dataset.computedDate = info.date.toISOString().slice(0, 10);
        event.title = `Date: ${info.date.toDateString()}`;
      }
    }

    layoutOverlaps();
    bindEvents();
  }

  function refresh() {
    if (renderRaf) cancelAnimationFrame(renderRaf);

    renderRaf = requestAnimationFrame(() => {
      renderRaf = 0;
      applyFilters();
    });
  }

  function initHeaderAndRange() {
    const now = new Date();

    if (headerTitle) {
      headerTitle.textContent = `${now.toLocaleString("en-US", { month: "long" })}, ${now.getFullYear()}`;
    }

    if (rangeBtn) {
      const s = startOfWeek(now);
      const e = new Date(s);
      e.setDate(s.getDate() + 6);
      rangeBtn.textContent = `📅 ${formatDateShort(s)} - ${formatDateShort(e)}`;
    }
  }

  function setupFilterButtons() {
    filterButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        filterButtons.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        state.filter = btn.dataset.filter || "all";
        board.dataset.filter = state.filter;
        refresh();
      });
    });
  }

  function setupViewButtons() {
    viewButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        viewButtons.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        renderCalendarView(btn.dataset.view || "daily");
        refresh();
      });
    });
  }

  function setupYearButtons() {
    if (!filterYearButtons.length) return;

    filterYearButtons.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.stopPropagation();

        filterYearButtons.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");

        const txt = (btn.textContent || "").trim();
        const match = txt.match(/(19|20)\d{2}$/);
        state.selectedYear = match ? Number(match[0]) : null;

        if (rangeBtn) rangeBtn.textContent = `📅 ${txt}`;
        filterYear?.classList.remove("show-fillter");

        renderCalendarView(state.view);
        refresh();
      });
    });
  }

  function setupMonthButtons() {
    monthButtons.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.stopPropagation();

        monthButtons.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");

        state.selectedMonth = Number(btn.dataset.month);
        monthBox?.classList.remove("show-fillter");

        renderCalendarView(state.view);
        refresh();
      });
    });
  }

  function setupSearch() {
    if (!searchDateInput) return;

    searchDateInput.addEventListener("input", (e) => {
      state.searchDate = e.target.value || null;
      refresh();
    });
  }

  function setupPeriodToggle() {
    periodToggle?.addEventListener("click", () => {
      state.period = state.period === "am" ? "pm" : "am";
      board.dataset.period = state.period;
      buildTimeLabels(state.period);
      refresh();
    });
  }

  function setupRangeButton() {
    rangeBtn?.addEventListener("click", (e) => {
      e.stopPropagation();
      filterYear?.classList.toggle("show-fillter");
    });
  }

  function setupMonthToggle() {
    monthBtn?.addEventListener("click", (e) => {
      e.stopPropagation();
      monthBox?.classList.toggle("show-fillter");
    });
  }

  function setupDocumentClear() {
    document.addEventListener("click", clearActiveEvent);
  }

  function setupTodayButton() {
    todayBtn?.addEventListener("click", () => {
      state.selectedYear = null;
      state.selectedMonth = null;
      state.selectedWeek = null;
      state.searchDate = null;

      if (searchDateInput) searchDateInput.value = "";

      const currentYear = new Date().getFullYear();
      const currentBtn = Array.from(filterYearButtons).find((btn) => {
        const txt = (btn.textContent || "").trim();
        const match = txt.match(/(19|20)\d{2}$/);
        return match && Number(match[0]) === currentYear;
      });

      if (currentBtn) currentBtn.click();
      else {
        renderCalendarView(state.view);
        refresh();
      }
    });
  }

  function syncScroll() {
    let isSyncing = false;

    calendarHeads.addEventListener(
      "scroll",
      () => {
        if (isSyncing) return;

        isSyncing = true;

        weekGrid.scrollLeft = calendarHeads.scrollLeft;

        weekGrid.style.backgroundPosition =
          `-${calendarHeads.scrollLeft}px 0, 0 0`;

        requestAnimationFrame(() => {
          isSyncing = false;
        });
      },
      { passive: true }
    );

    weekGrid.addEventListener(
      "scroll",
      () => {
        if (isSyncing) return;

        isSyncing = true;

        calendarHeads.scrollLeft = weekGrid.scrollLeft;

        weekGrid.style.backgroundPosition =
          `-${weekGrid.scrollLeft}px 0, 0 0`;

        requestAnimationFrame(() => {
          isSyncing = false;
        });
      },
      { passive: true }
    );
  }

  function autoSelectCurrentYear() {
    const y = new Date().getFullYear();

    let found = null;
    for (const btn of filterYearButtons) {
      const txt = (btn.textContent || "").trim();
      const match = txt.match(/(19|20)\d{2}$/);
      if (match && Number(match[0]) === y) {
        found = btn;
        break;
      }
    }

    if (found) found.click();
    else if (filterYearButtons[0]) filterYearButtons[0].click();
  }

  function init() {
    buildTimeLabels(state.period);
    renderCalendarView(state.view);
    initHeaderAndRange();

    setupFilterButtons();
    setupViewButtons();
    setupYearButtons();
    setupMonthToggle();
    setupMonthButtons();
    setupSearch();
    setupPeriodToggle();
    setupRangeButton();
    setupDocumentClear();
    setupTodayButton();
    syncScroll();

    if (filterYearButtons.length) {
      autoSelectCurrentYear();
    } else {
      refresh();
    }
  }

  init();
})();