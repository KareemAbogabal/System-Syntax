import { makeBranchDoughnutChart, makeBarChart } from "../../charts.js";

const companyDistributionCtx = document.getElementById('companyDistributionChart');
const companyBalanceCtx = document.getElementById('companyBalanceChart');
const board = document.getElementById("board");
const svg = document.getElementById("lines");
const tooltip = document.getElementById("tooltip");
const allEmployees = [...document.querySelectorAll(".employee")];
const employeeMap = Object.fromEntries(allEmployees.map(el => [el.dataset.id, el]));

makeBranchDoughnutChart(companyDistributionCtx);

makeBarChart(companyBalanceCtx);

// const paths = [...svg.querySelectorAll("path[data-left]")].map(path => ({
//   el: path,
//   id: path.id,
//   leftId: path.dataset.left,
//   rightId: path.dataset.right,
//   messages: path.dataset.msgs.split("||")
// }));

// const state = {
//   size: { width: 0, height: 0 },
//   positions: {},
//   orderLeft: ["l1", "l2", "l3", "l4"],
//   orderRight: ["r1", "r2", "r3", "r4"],
//   activeConn: null,
//   hoverConn: null,
//   drag: {
//     id: null,
//     pointerId: null,
//     offsetX: 0,
//     offsetY: 0,
//     timer: null,
//     active: false,
//     side: null
//   },
//   slots: { left: [], right: [] }
// };

// function clamp(v, min, max) {
//   return Math.max(min, Math.min(max, v));
// }

// function getBoardRect() {
//   return board.getBoundingClientRect();
// }

// function buildSlots() {
//   const rect = getBoardRect();
//   state.size.width = rect.width;
//   state.size.height = rect.height;

//   const leftX = rect.width * 0.20;
//   const rightX = rect.width * 0.80;
//   const topPadding = 120;
//   const bottomPadding = 110;
//   const available = Math.max(1, rect.height - topPadding - bottomPadding);
//   const leftCount = state.orderLeft.length;
//   const rightCount = state.orderRight.length;
//   const leftGap = available / Math.max(1, leftCount);
//   const rightGap = available / Math.max(1, rightCount);

//   state.slots.left = state.orderLeft.map((id, index) => ({
//     id,
//     x: leftX,
//     y: topPadding + leftGap * index + leftGap / 2
//   }));

//   state.slots.right = state.orderRight.map((id, index) => ({
//     id,
//     x: rightX,
//     y: topPadding + rightGap * index + rightGap / 2
//   }));

//   state.orderLeft.forEach((id, index) => {
//     if (!state.positions[id] || !(state.drag.id === id && state.drag.active)) {
//       state.positions[id] = { x: state.slots.left[index].x, y: state.slots.left[index].y };
//     }
//   });

//   state.orderRight.forEach((id, index) => {
//     if (!state.positions[id] || !(state.drag.id === id && state.drag.active)) {
//       state.positions[id] = { x: state.slots.right[index].x, y: state.slots.right[index].y };
//     }
//   });
// }

// function makeSoftEndPath(a, b) {
//   const dx = b.x - a.x;
//   const dy = b.y - a.y;
//   const dist = Math.sqrt(dx * dx + dy * dy) || 1;
//   const curve = clamp(dist * 0.045, 12, 24);

//   const c1 = { x: a.x + curve, y: a.y };
//   const c2 = { x: b.x - curve, y: b.y };

//   return [
//     `M ${a.x.toFixed(2)} ${a.y.toFixed(2)}`,
//     `Q ${(a.x + curve * 0.55).toFixed(2)} ${a.y.toFixed(2)} ${c1.x.toFixed(2)} ${c1.y.toFixed(2)}`,
//     `L ${c2.x.toFixed(2)} ${c2.y.toFixed(2)}`,
//     `Q ${(b.x - curve * 0.55).toFixed(2)} ${b.y.toFixed(2)} ${b.x.toFixed(2)} ${b.y.toFixed(2)}`
//   ].join(" ");
// }

// function getConnectionLayout() {
//   return paths.map((conn, index) => {
//     const a = state.positions[conn.leftId];
//     const b = state.positions[conn.rightId];
//     if (!a || !b) {
//       return { ...conn, path: "", mid: { x: 0, y: 0 }, index };
//     }

//     const start = { x: a.x + 88, y: a.y };
//     const end = { x: b.x - 88, y: b.y };
//     const path = makeSoftEndPath(start, end);

//     return {
//       ...conn,
//       path,
//       start,
//       end,
//       mid: {
//         x: (start.x + end.x) / 2,
//         y: (start.y + end.y) / 2
//       },
//       index
//     };
//   });
// }

// function connectionForId(id) {
//   return getConnectionLayout().find(c => c.id === id);
// }

// function showTooltip(conn) {
//   if (!conn) {
//     tooltip.style.display = "none";
//     return;
//   }

//   const x = clamp(conn.mid.x + 18, 12, state.size.width - 320);
//   const y = clamp(conn.mid.y - 10, 12, state.size.height - 140);
//   tooltip.style.display = "block";
//   tooltip.style.left = x + "px";
//   tooltip.style.top = y + "px";
//   tooltip.innerHTML = `
//     <div class="title">${employeeMap[conn.leftId]?.dataset.name || ""} ↔ ${employeeMap[conn.rightId]?.dataset.name || ""}</div>
//     <div class="msgs">
//       ${conn.messages.map(msg => `<div class="msg">${msg}</div>`).join("")}
//     </div>
//   `;
// }

// function positionCards() {
//   allEmployees.forEach(el => {
//     const id = el.dataset.id;
//     const p = state.positions[id];
//     if (!p) return;
//     el.style.left = p.x + "px";
//     el.style.top = p.y + "px";
//     el.classList.toggle("dragging", state.drag.id === id && state.drag.active);
//   });
// }

// function renderLines() {
//   const layout = getConnectionLayout();

//   paths.forEach(item => {
//     const current = layout.find(c => c.id === item.id);
//     if (!current || !current.path) return;

//     item.el.setAttribute("d", current.path);
//     item.el.setAttribute("fill", "none");
//     item.el.setAttribute("stroke", "url(#lineGrad)");
//     item.el.setAttribute("stroke-width", (state.hoverConn === item.id || state.activeConn === item.id) ? "3.4" : "2.1");
//     item.el.setAttribute("stroke-linecap", "round");
//     item.el.style.opacity = "1";
//     item.el.style.cursor = "pointer";
//   });

//   [...svg.querySelectorAll("path[data-left]")].forEach(path => {
//     const id = path.id;
//     path.style.opacity = "1";
//   });

//   if (state.activeConn && !connectionForId(state.activeConn)) {
//     state.activeConn = null;
//   }

//   if (!state.hoverConn && !state.activeConn) {
//     tooltip.style.display = "none";
//   } else if (state.hoverConn) {
//     showTooltip(connectionForId(state.hoverConn));
//   } else if (state.activeConn) {
//     showTooltip(connectionForId(state.activeConn));
//   }
// }

// function renderAll() {
//   positionCards();
//   renderLines();
// }

// function syncPositionsToSlots(side) {
//   const order = side === "left" ? state.orderLeft : state.orderRight;
//   const slots = side === "left" ? state.slots.left : state.slots.right;

//   order.forEach((id, index) => {
//     if (state.drag.id === id && state.drag.active) return;
//     const slot = slots[index];
//     if (slot) {
//       state.positions[id] = { x: slot.x, y: slot.y };
//     }
//   });

//   renderAll();
// }

// function reorderByPointer(side, draggedId, pointerY) {
//   const order = side === "left" ? state.orderLeft : state.orderRight;
//   const slots = side === "left" ? state.slots.left : state.slots.right;

//   const currentIndex = order.indexOf(draggedId);
//   if (currentIndex < 0) return;

//   let targetIndex = currentIndex;
//   for (let i = 0; i < slots.length; i++) {
//     if (pointerY > slots[i].y) targetIndex = i;
//   }
//   targetIndex = clamp(targetIndex, 0, order.length - 1);

//   if (targetIndex !== currentIndex) {
//     order.splice(currentIndex, 1);
//     order.splice(targetIndex, 0, draggedId);
//   }

//   order.forEach((id, index) => {
//     const slot = slots[index];
//     if (!slot) return;
//     if (!(state.drag.id === id && state.drag.active)) {
//       state.positions[id] = { x: slot.x, y: slot.y };
//     }
//   });
// }

// function onPointerDown(e) {
//   const el = e.currentTarget;
//   const id = el.dataset.id;
//   const rect = board.getBoundingClientRect();
//   const current = state.positions[id];
//   if (!current) return;

//   e.preventDefault();
//   e.stopPropagation();

//   clearTimeout(state.drag.timer);

//   state.drag = {
//     id,
//     pointerId: e.pointerId,
//     offsetX: e.clientX - rect.left - current.x,
//     offsetY: e.clientY - rect.top - current.y,
//     timer: window.setTimeout(() => {
//       state.drag.active = true;
//       renderAll();
//     }, 180),
//     active: false,
//     side: id.startsWith("l") ? "left" : "right"
//   };

//   window.addEventListener("pointermove", onPointerMove);
//   window.addEventListener("pointerup", onPointerUp, { once: true });
//   window.addEventListener("pointercancel", onPointerUp, { once: true });
// }

// function onPointerMove(e) {
//   const drag = state.drag;
//   if (!drag.id || !drag.active) return;

//   const rect = board.getBoundingClientRect();
//   const x = clamp(
//     e.clientX - rect.left - drag.offsetX,
//     drag.side === "left" ? rect.width * 0.06 : rect.width * 0.56,
//     drag.side === "left" ? rect.width * 0.44 : rect.width * 0.94
//   );
//   const y = clamp(e.clientY - rect.top - drag.offsetY, 70, rect.height - 92);

//   state.positions[drag.id] = { x, y };
//   reorderByPointer(drag.side, drag.id, y);
//   renderAll();
// }

// function onPointerUp() {
//   const drag = state.drag;
//   if (drag.timer) clearTimeout(drag.timer);
//   window.removeEventListener("pointermove", onPointerMove);

//   state.drag = {
//     id: null,
//     pointerId: null,
//     offsetX: 0,
//     offsetY: 0,
//     timer: null,
//     active: false,
//     side: null
//   };

//   renderAll();
// }

// function initCards() {
//   const ro = new ResizeObserver(() => {
//     buildSlots();
//     renderAll();
//   });

//   ro.observe(board);

//   window.addEventListener("resize", () => {
//     buildSlots();
//     renderAll();
//   });

//   buildSlots();
//   renderAll();

//   document.querySelectorAll(".employee").forEach(el => {
//     el.addEventListener("pointerdown", onPointerDown);
//   });

//   [...svg.querySelectorAll("path[data-left]")].forEach(path => {
//     path.addEventListener("mouseenter", () => {
//       state.hoverConn = path.id;
//       renderLines();
//     });

//     path.addEventListener("mouseleave", () => {
//       state.hoverConn = null;
//       if (!state.activeConn) tooltip.style.display = "none";
//       renderLines();
//     });

//     path.addEventListener("click", () => {
//       state.activeConn = path.id;
//       state.hoverConn = path.id;
//       renderLines();
//     });

//     const hit = document.createElementNS("http://www.w3.org/2000/svg", "path");
//     hit.setAttribute("d", path.getAttribute("d") || "");
//   });

//   const initial = getConnectionLayout();
//   initial.forEach(conn => {
//     const node = document.getElementById(conn.id);
//     if (!node) return;

//     node.addEventListener("mouseenter", () => {
//       state.hoverConn = conn.id;
//       renderLines();
//     });

//     node.addEventListener("mouseleave", () => {
//       state.hoverConn = null;
//       if (!state.activeConn) tooltip.style.display = "none";
//       renderLines();
//     });

//     node.addEventListener("click", () => {
//       state.activeConn = conn.id;
//       state.hoverConn = conn.id;
//       renderLines();
//     });
//   });
// }

// initCards();

// // Search functionality
// const searchInput = document.getElementById('searchInput');
// if (searchInput) {
//   searchInput.addEventListener('input', (e) => {
//     const searchValue = e.target.value.toLowerCase().trim();
//     const employees = document.querySelectorAll('.employee');
//     const connections = document.querySelectorAll('path[data-left]');
    
//     if (searchValue === '') {
//       employees.forEach(emp => {
//         emp.style.opacity = '1';
//         emp.style.pointerEvents = 'auto';
//       });
//       connections.forEach(conn => {
//         conn.style.opacity = '1';
//         conn.style.pointerEvents = 'auto';
//       });
//     } else {
//       employees.forEach(emp => {
//         emp.style.opacity = '0.2';
//         emp.style.pointerEvents = 'none';
//       });
//       connections.forEach(conn => {
//         conn.style.opacity = '0.1';
//         conn.style.pointerEvents = 'none';
//       });
      
//       // Split search by '-' to support multiple searches like "Omar - Layla"
//       const searchTerms = searchValue.split('-').map(term => term.trim()).filter(term => term.length > 0);
//       const matchingIds = new Set();
//       employees.forEach(emp => {
//         const name = emp.dataset.name?.toLowerCase() || '';
//         const role = emp.dataset.role?.toLowerCase() || '';
        
//         // Check if any search term matches the name or role
//         const matches = searchTerms.some(term => 
//           name.includes(term) || role.includes(term)
//         );
        
//         if (matches) {
//           emp.style.opacity = '1';
//           emp.style.pointerEvents = 'auto';
//           matchingIds.add(emp.dataset.id);
//         }
//       });
      
//       connections.forEach(conn => {
//         const leftId = conn.dataset.left;
//         const rightId = conn.dataset.right;
//         if (matchingIds.has(leftId) && matchingIds.has(rightId)) {
//           conn.style.opacity = '1';
//           conn.style.pointerEvents = 'auto';
//         }
//       });
//     }
//   });
// }

const popup = document.querySelector('.main-form .card-show.chat-show');
const titleEl = popup.querySelector(".chat-popup-head h2");
const subtitleEl = popup.querySelector(".chat-popup-head p");
const badgeEl = popup.querySelector(".chat-badge");
const topUserImg = popup.querySelector(".chat-user-card--top img");
const topUserName = popup.querySelector(".chat-user-card--top .chat-user-info strong");
const topUserRole = popup.querySelector(".chat-user-card--top .chat-user-info span");
const bottomUserImg = popup.querySelector(".chat-user-card--bottom img");
const bottomUserName = popup.querySelector(".chat-user-card--bottom .chat-user-info strong");
const bottomUserRole = popup.querySelector(".chat-user-card--bottom .chat-user-info span");
const messagesBox = popup.querySelector(".chat-messages");

document.querySelectorAll('.conversation-item[data-follow="show-chat"]').forEach((item) => {
  item.addEventListener("click", () => {
    const {
      chatTitle,
      chatSubtitle,
      chatCount,
      leftName,
      leftRole,
      leftAvatar,
      rightName,
      rightRole,
      rightAvatar,
      messages
    } = item.dataset;

    titleEl.textContent = chatTitle || `${leftName} ↔ ${rightName}`;
    subtitleEl.textContent = chatSubtitle || "";
    badgeEl.textContent = chatCount || "";

    topUserImg.src = leftAvatar || "";
    topUserImg.alt = leftName || "User";
    topUserName.textContent = leftName || "";
    topUserRole.textContent = leftRole || "";

    bottomUserImg.src = rightAvatar || "";
    bottomUserImg.alt = rightName || "User";
    bottomUserName.textContent = rightName || "";
    bottomUserRole.textContent = rightRole || "";

    let chatMessages = [];
    try {
      chatMessages = messages ? JSON.parse(messages) : [];
    } catch (err) {
      chatMessages = [];
    }

    messagesBox.innerHTML = chatMessages.map((msg) => `
      <div class="chat-message chat-message--${msg.side === "right" ? "right" : "left"}">
        <div class="chat-message-meta">
          <strong>${msg.name || ""}</strong>
          <span>${msg.time || ""}</span>
        </div>
        <p>${msg.text || ""}</p>
      </div>
    `).join("");
  });
});