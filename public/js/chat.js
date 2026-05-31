const replyBar = document.getElementById("replyBar");
const replyBarName = replyBar.querySelector(".reply-bar-name");
const replyBarText = replyBar.querySelector(".reply-bar-text");
const replyCancel = replyBar.querySelector(".reply-cancel");
const chatCardHeaderInfo = document.querySelector(".chat-card .header .info");
const chatCardHeaderControls = document.querySelector(".chat-card .header .controls");
const form = document.querySelector(
  ".chat-page .chat .chat-card .composer form",
);
const textarea = document.querySelector(
  ".chat-page .chat .chat-card .composer textarea",
);
const btnBoxUpload = document.querySelector(
  ".chat-page .chat .chat-card .composer .tool-row .attach-trigger",
);
const box = document.querySelector(".messages");
const attachmentsPreview = document.getElementById("attachmentsPreview");
const imageInput = document.getElementById("attach-image");
const fileInput = document.getElementById("attach-file");
const docInput = document.getElementById("attach-doc");
let contact = document.querySelectorAll(".contacts .contact");
let messages = document.querySelector(".chat-page .chat .chat-card .messages");
let composer = document.querySelector(".composer");
const sendOrRecordBtn = document.getElementById("sendOrRecordBtn");
const voiceRecordingBar = document.getElementById("voiceRecordingBar");
const voiceTimer = document.getElementById("voiceTimer");
const voiceCancel = document.getElementById("voiceCancel");

let mediaRecorder = null;
let voiceStream = null;
let voiceChunks = [];
let voiceTimerId = null;
let voiceStartedAt = 0;
let isRecording = false;
let discardVoice = false;
let voiceAudioContext = null;
let voiceAnalyser = null;
let voiceSourceNode = null;
let voiceMeterRAF = null;
let voiceMeterBars = [];
let replyTarget = null;
let reactionTarget = null;
let messageCounter = 0;
const menuWrap = document.getElementById("menuWrap");
const menuTrigger = document.getElementById("menuTrigger");
const fancyMenu = document.getElementById("fancyMenu");

if (menuTrigger) {
  menuTrigger.addEventListener("click", (e) => {
    e.stopPropagation();
    menuWrap.classList.toggle("open");
    fancyMenu.setAttribute(
      "aria-hidden",
      menuWrap.classList.contains("open") ? "false" : "true"
    );
  });
};

document.addEventListener("click", (e) => {
  if (menuWrap && !menuWrap.contains(e.target)) {
    menuWrap.classList.remove("open");
    fancyMenu.setAttribute("aria-hidden", "true");
  }
});

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    menuWrap.classList.remove("open");
    fancyMenu.setAttribute("aria-hidden", "true");
  }
});

function formatClock(totalSeconds) {
  const m = Math.floor(totalSeconds / 60);
  const s = totalSeconds % 60;
  return `${String(m).padStart(2, "0")}:${String(s).padStart(2, "0")}`;
}

function hasComposerText() {
  return textarea.value.trim().length > 0;
}

function updateComposerButton() {
  const sendMode = hasComposerText();
  sendOrRecordBtn.classList.toggle("is-send", sendMode);
  sendOrRecordBtn.classList.toggle("is-record", !sendMode);
  sendOrRecordBtn.setAttribute(
    "aria-label",
    sendMode
      ? "Send message"
      : isRecording
        ? "Stop recording"
        : "Record voice message",
  );
}

function createVoiceWaveLevels(count = 18, seed = 0) {
  const levels = [];
  let x = (Math.abs(seed) || 1) % 2147483647;
  for (let i = 0; i < count; i++) {
    x = (x * 48271) % 2147483647;
    levels.push(8 + (x % 6) * 3);
  }
  return levels;
}

function buildVoiceWaveHTML(levels = null) {
  const bars =
    Array.isArray(levels) && levels.length ? levels : createVoiceWaveLevels();
  return bars
    .map((h) => `<span data-base-height="${h}px" style="height:${h}px"></span>`)
    .join("");
}

function ensureVoiceMeter() {
  let meter = voiceRecordingBar?.querySelector(".voice-meter");
  if (!meter) {
    meter = document.createElement("div");
    meter.className = "voice-meter";
    meter.setAttribute("aria-hidden", "true");
    meter.style.display = "inline-flex";
    meter.style.alignItems = "flex-end";
    meter.style.gap = "3px";
    meter.style.height = "22px";
    meter.style.marginInline = "8px";
    meter.style.verticalAlign = "middle";

    for (let i = 0; i < 14; i++) {
      const bar = document.createElement("span");
      bar.className = "voice-meter-bar";
      bar.style.width = "3px";
      bar.style.height = "6px";
      bar.style.borderRadius = "999px";
      bar.style.backgroundColor = "currentColor";
      bar.style.opacity = "0.45";
      bar.style.transformOrigin = "center bottom";
      bar.style.transition = "height 80ms linear, opacity 80ms linear";
      meter.appendChild(bar);
    }

    if (voiceTimer && voiceTimer.parentNode) {
      voiceTimer.insertAdjacentElement("afterend", meter);
    } else {
      voiceRecordingBar.appendChild(meter);
    }
  }
  return meter;
}

function stopVoiceMeter() {
  if (voiceMeterRAF) {
    cancelAnimationFrame(voiceMeterRAF);
    voiceMeterRAF = null;
  }

  if (voiceSourceNode) {
    try {
      voiceSourceNode.disconnect();
    } catch (_) {}
    voiceSourceNode = null;
  }

  if (voiceAnalyser) {
    try {
      voiceAnalyser.disconnect();
    } catch (_) {}
    voiceAnalyser = null;
  }

  if (voiceAudioContext) {
    try {
      voiceAudioContext.close();
    } catch (_) {}
    voiceAudioContext = null;
  }

  voiceMeterBars.forEach((bar) => {
    bar.style.height = "6px";
    bar.style.opacity = "0.45";
  });
  voiceMeterBars = [];
}

function startVoiceMeter(stream) {
  stopVoiceMeter();

  const meter = ensureVoiceMeter();
  const AudioCtx = window.AudioContext || window.webkitAudioContext;
  if (!AudioCtx || !stream || !meter) return;

  try {
    voiceAudioContext = new AudioCtx();
    if (voiceAudioContext.state === "suspended") {
      voiceAudioContext.resume().catch(() => {});
    }

    voiceSourceNode = voiceAudioContext.createMediaStreamSource(stream);
    voiceAnalyser = voiceAudioContext.createAnalyser();
    voiceAnalyser.fftSize = 64;
    voiceSourceNode.connect(voiceAnalyser);

    voiceMeterBars = Array.from(meter.querySelectorAll(".voice-meter-bar"));
    const data = new Uint8Array(voiceAnalyser.frequencyBinCount);

    const animate = () => {
      if (!voiceAnalyser || !voiceMeterBars.length) return;
      voiceAnalyser.getByteTimeDomainData(data);

      const barsCount = voiceMeterBars.length;
      const step = Math.max(1, Math.floor(data.length / barsCount));

      voiceMeterBars.forEach((bar, idx) => {
        const start = idx * step;
        const end =
          idx === barsCount - 1
            ? data.length
            : Math.min(data.length, start + step);
        let sum = 0;
        let count = 0;
        for (let i = start; i < end; i++) {
          sum += Math.abs(data[i] - 128) / 128;
          count++;
        }
        const level = count ? sum / count : 0;
        const height = 6 + Math.round(level * 18);
        bar.style.height = `${height}px`;
        bar.style.opacity = String(0.35 + level * 0.65);
      });

      voiceMeterRAF = requestAnimationFrame(animate);
    };

    animate();
  } catch (error) {
    console.error(error);
    stopVoiceMeter();
  }
}

function createDemoVoiceUrl() {
  const sampleRate = 8000;
  const duration = 1.25;
  const numSamples = Math.floor(sampleRate * duration);
  const buffer = new ArrayBuffer(44 + numSamples * 2);
  const view = new DataView(buffer);

  const writeString = (offset, str) => {
    for (let i = 0; i < str.length; i++) {
      view.setUint8(offset + i, str.charCodeAt(i));
    }
  };
  const write16 = (offset, value) => view.setUint16(offset, value, true);
  const write32 = (offset, value) => view.setUint32(offset, value, true);

  writeString(0, "RIFF");
  write32(4, 36 + numSamples * 2);
  writeString(8, "WAVE");
  writeString(12, "fmt ");
  write32(16, 16);
  write16(20, 1);
  write16(22, 1);
  write32(24, sampleRate);
  write32(28, sampleRate * 2);
  write16(32, 2);
  write16(34, 16);
  writeString(36, "data");
  write32(40, numSamples * 2);

  let offset = 44;
  for (let i = 0; i < numSamples; i++) {
    const t = i / sampleRate;
    const env = Math.sin(Math.PI * (i / numSamples));
    const tone =
      (Math.sin(2 * Math.PI * 220 * t) * 0.65 +
        Math.sin(2 * Math.PI * 440 * t) * 0.25) *
      env;
    view.setInt16(offset, Math.max(-1, Math.min(1, tone)) * 32767, true);
    offset += 2;
  }

  return URL.createObjectURL(new Blob([buffer], { type: "audio/wav" }));
}

demoVoiceUrl = createDemoVoiceUrl();

async function startVoiceRecording() {
  if (isRecording) return;
  if (
    !navigator.mediaDevices?.getUserMedia ||
    typeof MediaRecorder === "undefined"
  ) {
    alert("Voice recording is not supported in this browser.");
    return;
  }

  try {
    voiceStream = await navigator.mediaDevices.getUserMedia({ audio: true });
    voiceChunks = [];
    discardVoice = false;
    mediaRecorder = new MediaRecorder(voiceStream);

    mediaRecorder.ondataavailable = (event) => {
      if (event.data && event.data.size > 0) voiceChunks.push(event.data);
    };

    mediaRecorder.onstop = () => {
      if (voiceTimerId) {
        clearInterval(voiceTimerId);
        voiceTimerId = null;
      }

      if (voiceStream) {
        voiceStream.getTracks().forEach((track) => track.stop());
        voiceStream = null;
      }

      stopVoiceMeter();

      const blob = new Blob(voiceChunks, {
        type: mediaRecorder?.mimeType || "audio/webm",
      });
      const url = URL.createObjectURL(blob);

      if (!discardVoice && blob.size > 0) {
        const voiceLevels = createVoiceWaveLevels(18, blob.size);
        appendVoiceMessage(url, voiceLevels);
      } else {
        URL.revokeObjectURL(url);
      }

      voiceChunks = [];
      mediaRecorder = null;
      isRecording = false;
      voiceRecordingBar.classList.add("hidden");
      sendOrRecordBtn.classList.remove("recording");
      updateComposerButton();
    };

    mediaRecorder.start();
    isRecording = true;
    voiceStartedAt = Date.now();
    voiceRecordingBar.classList.remove("hidden");
    sendOrRecordBtn.classList.add("recording");
    voiceTimer.textContent = "00:00";
    updateComposerButton();
    startVoiceMeter(voiceStream);

    voiceTimerId = setInterval(() => {
      const elapsed = Math.floor((Date.now() - voiceStartedAt) / 1000);
      voiceTimer.textContent = formatClock(elapsed);
    }, 1000);
  } catch (error) {
    console.error(error);
    isRecording = false;
    voiceRecordingBar.classList.add("hidden");
    sendOrRecordBtn.classList.remove("recording");
    stopVoiceMeter();
    updateComposerButton();
  }
}

function stopVoiceRecording({ cancel = false } = {}) {
  if (!isRecording) return;
  discardVoice = cancel;
  if (mediaRecorder && mediaRecorder.state !== "inactive") {
    mediaRecorder.stop();
  }
}

function escapeHTML(str) {
  return String(str)
    .replaceAll("&", "&amp;")
    .replaceAll("<", "&lt;")
    .replaceAll(">", "&gt;")
    .replaceAll('"', "&quot;")
    .replaceAll("'", "&#039;");
}

function getHiddenContainer() {
  let container = form.querySelector(".dynamic-hidden-fields");
  if (!container) {
    container = document.createElement("div");
    container.className = "dynamic-hidden-fields";
    container.style.display = "none";
    form.prepend(container);
  }
  return container;
}

function setHiddenInput(name, value) {
  const container = getHiddenContainer();
  let input = container.querySelector(`input[name="${name}"]`);
  if (value === null || value === undefined || value === "") {
    if (input) input.remove();
    return;
  }
  if (!input) {
    input = document.createElement("input");
    input.type = "hidden";
    input.name = name;
    container.appendChild(input);
  }
  input.value = value;
}

function removeHiddenInput(name) {
  const input = form.querySelector(
    `.dynamic-hidden-fields input[name="${name}"]`,
  );
  if (input) input.remove();
}

function extractMessageData(row) {
  if (row.classList.contains("voice")) {
    return {
      name: row.classList.contains("assistant") ? "Assistant" : "User",
      text: row.dataset.voiceLabel || row.dataset.text || "Voice message",
    };
  }

  const bubble = row.querySelector(".bubble");
  if (!bubble) return { name: "Message", text: "" };

  const clone = bubble.cloneNode(true);
  clone
    .querySelectorAll(
      ".message-actions, .reaction-picker, .reply-preview, .reaction-bar",
    )
    .forEach((el) => el.remove());
  const fileName = clone.querySelector(".file-name")?.textContent?.trim();
  const fileMeta = clone.querySelector(".file-meta")?.textContent?.trim();
  const caption = clone.querySelector(".caption")?.textContent?.trim();
  const strong = clone.querySelector("strong")?.textContent?.trim();
  let text = clone.textContent.trim().replace(/\s+/g, " ");
  if (fileName) {
    text = fileName + (fileMeta ? ` • ${fileMeta}` : "");
  } else if (caption) {
    text = caption;
  }
  const name =
    strong || (row.classList.contains("assistant") ? "Assistant" : "User");
  return { name, text };
}

function openReply(row) {
  replyTarget = row;
  const data = extractMessageData(row);
  replyBarName.textContent = data.name;
  replyBarText.textContent = data.text || "Message";
  replyBar.classList.remove("hidden");
  setHiddenInput("reply_message_id", row.dataset.messageId || "");
  setHiddenInput("reply_message_text", data.text || "");
  document
    .querySelectorAll(".message-row.is-reply-target")
    .forEach((el) => el.classList.remove("is-reply-target"));
  row.classList.add("is-reply-target");
  textarea.focus();
}

function closeReply() {
  replyTarget = null;
  replyBar.classList.add("hidden");
  replyBarName.textContent = "";
  replyBarText.textContent = "";
  removeHiddenInput("reply_message_id");
  removeHiddenInput("reply_message_text");
  document
    .querySelectorAll(".message-row.is-reply-target")
    .forEach((el) => el.classList.remove("is-reply-target"));
}

function ensureActions(row) {
  if (row.querySelector(".message-actions")) return;
  const actions = document.createElement("div");
  actions.className = "message-actions";
  actions.innerHTML = `
    <button type="button" class="message-action reply-btn" aria-label="reply">
      <svg viewBox="0 0 24 24"><path d="M10 7 5 12l5 5"/><path d="M5 12h9a5 5 0 0 1 5 5v0"/></svg>
    </button>
    <button type="button" class="message-action react-btn" aria-label="react">
      <svg viewBox="0 0 24 24"><path d="M12 21s-7-4.35-9.5-8.5C.5 8.5 3 5 6.8 5c2.1 0 3.6 1.1 4.2 2.2C11.6 6.1 13.1 5 15.2 5 19 5 21.5 8.5 21.5 12.5 19 16.65 12 21 12 21Z"/></svg>
    </button>
  `;
  const picker = document.createElement("div");
  picker.className = "reaction-picker";
  picker.innerHTML = `
    <button type="button" data-emoji="👍">👍</button>
    <button type="button" data-emoji="❤️">❤️</button>
    <button type="button" data-emoji="😂">😂</button>
    <button type="button" data-emoji="🔥">🔥</button>
    <button type="button" data-emoji="👏">👏</button>
  `;
  row.appendChild(actions);
  row.appendChild(picker);
}

function setReaction(row, emoji) {
  reactionTarget = row;
  if (emoji) {
    setHiddenInput("reaction_message_id", row.dataset.messageId || "");
    setHiddenInput("reaction_value", emoji);
  } else {
    removeHiddenInput("reaction_message_id");
    removeHiddenInput("reaction_value");
  }
}

function closeReaction() {
  reactionTarget = null;
  removeHiddenInput("reaction_message_id");
  removeHiddenInput("reaction_value");
}

function addReaction(row, emoji) {
  const bubble = row.querySelector(".bubble");
  if (!bubble) return;
  let bar = bubble.querySelector(".reaction-bar");
  if (!bar) {
    bar = document.createElement("div");
    bar.className = "reaction-bar";
    bubble.appendChild(bar);
  }
  let pill = [...bar.querySelectorAll(".reaction-pill")].find(
    (p) => p.dataset.emoji === emoji,
  );
  if (!pill) {
    pill = document.createElement("span");
    pill.className = "reaction-pill";
    pill.dataset.emoji = emoji;
    pill.dataset.count = "1";
    pill.textContent = emoji;
    bar.appendChild(pill);
    return;
  }
  const count = parseInt(pill.dataset.count || "1", 10) + 1;
  pill.dataset.count = String(count);
  pill.textContent = `${emoji} ${count}`;
}

function renderReplyPreview(targetRow) {
  const data = extractMessageData(targetRow);
  return `
    <div class="reply-preview">
      <div class="reply-preview-name">Replying to ${escapeHTML(data.name)}</div>
      <div class="reply-preview-text">${escapeHTML(data.text)}</div>
    </div>
  `;
}

function formatFileSize(bytes) {
  const units = ["B", "KB", "MB", "GB"];
  let size = bytes;
  let i = 0;
  while (size >= 1024 && i < units.length - 1) {
    size /= 1024;
    i++;
  }
  return `${size.toFixed(size < 10 && i > 0 ? 1 : 0)} ${units[i]}`;
}

function renderAttachmentItem({ key, file, src = "", kind }) {
  const wrapper = document.createElement("div");
  wrapper.className = "attachment-item";
  wrapper.dataset.attachmentKey = key;
  let thumbHTML = "";
  if (kind === "image") {
    thumbHTML = `<div class="attachment-thumb"><img src="${src}" alt="${escapeHTML(file.name)}"></div>`;
  } else {
    thumbHTML = `
      <div class="attachment-thumb">
        <svg viewBox="0 0 24 24">
          <path d="M14 2H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7l-5-5Z" />
          <path d="M14 2v5h5" />
          ${kind === "document" ? '<path d="M8 13h8" /><path d="M8 17h8" />' : '<path d="M8 15h8" />'}
        </svg>
      </div>
    `;
  }
  wrapper.innerHTML = `
    <button type="button" class="remove-attachment" aria-label="Remove attachment">
      <svg viewBox="0 0 24 24"><path d="M6 6l12 12" /><path d="M18 6 6 18" /></svg>
    </button>
    ${thumbHTML}
    <div class="attachment-info">
      <strong title="${escapeHTML(file.name)}">${escapeHTML(file.name)}</strong>
      <small>${kind === "image" ? "Image" : kind === "document" ? "Document" : "File"} • ${formatFileSize(file.size)}</small>
    </div>
  `;
  wrapper.querySelector(".remove-attachment").addEventListener("click", () => {
    if (key === "image") {
      imageInput.value = "";
      removeHiddenInput("attached_image");
    }
    if (key === "document") {
      docInput.value = "";
      removeHiddenInput("attached_document");
    }
    if (key === "file") {
      fileInput.value = "";
      removeHiddenInput("attached_file");
    }
    wrapper.remove();
  });
  return wrapper;
}

function upsertAttachmentPreview({ key, file, kind, src = "" }) {
  const existing = attachmentsPreview?.querySelector(
    `[data-attachment-key="${key}"]`,
  );
  if (existing) existing.remove();
  const item = renderAttachmentItem({ key, file, kind, src });
  attachmentsPreview.prepend(item);
}

imageInput?.addEventListener("change", () => {
  const file = imageInput.files?.[0];
  if (!file) return;
  const reader = new FileReader();
  reader.onload = () => {
    upsertAttachmentPreview({
      key: "image",
      file,
      kind: "image",
      src: reader.result,
    });
    setHiddenInput("attached_image", file.name);
  };
  reader.readAsDataURL(file);
});

docInput?.addEventListener("change", () => {
  const file = docInput.files?.[0];
  if (!file) return;
  upsertAttachmentPreview({ key: "document", file, kind: "document" });
  setHiddenInput("attached_document", file.name);
});

fileInput?.addEventListener("change", () => {
  const file = fileInput.files?.[0];
  if (!file) return;
  const kind = file.type.startsWith("image/") ? "image" : "file";
  if (kind === "image") {
    const reader = new FileReader();
    reader.onload = () => {
      upsertAttachmentPreview({
        key: "file",
        file,
        kind: "image",
        src: reader.result,
      });
      setHiddenInput("attached_file", file.name);
    };
    reader.readAsDataURL(file);
    return;
  }
  upsertAttachmentPreview({ key: "file", file, kind: "file" });
  setHiddenInput("attached_file", file.name);
});

function setupVoicePlayback(row) {
  if (row.dataset.voiceBound === "true") return;
  const audio = row.querySelector("audio");
  const playBtn = row.querySelector(".voice-play");
  const duration = row.querySelector(".voice-duration");
  const bars = Array.from(row.querySelectorAll(".voice-wave span"));
  if (!audio || !playBtn || !bars.length) return;
  row.dataset.voiceBound = "true";

  let ctx = null;
  let analyser = null;
  let sourceNode = null;
  let rafId = null;
  let dataArray = null;
  let sourceReady = false;

  const resetBars = () => {
    bars.forEach((bar) => {
      bar.style.height = bar.dataset.baseHeight || "8px";
      bar.style.opacity = "0.45";
    });
  };

  const stopViz = () => {
    if (rafId) {
      cancelAnimationFrame(rafId);
      rafId = null;
    }
    resetBars();
  };

  const startViz = async () => {
    const AudioCtx = window.AudioContext || window.webkitAudioContext;
    if (!AudioCtx) return;
    if (!ctx) {
      ctx = new AudioCtx();
      if (ctx.state === "suspended") {
        try {
          await ctx.resume();
        } catch (_) {}
      }
      analyser = ctx.createAnalyser();
      analyser.fftSize = 64;
      if (!sourceReady) {
        sourceNode = ctx.createMediaElementSource(audio);
        sourceNode.connect(analyser);
        analyser.connect(ctx.destination);
        sourceReady = true;
      }
      dataArray = new Uint8Array(analyser.frequencyBinCount);
    }

    const animate = () => {
      if (!analyser || !dataArray) return;
      analyser.getByteTimeDomainData(dataArray);
      const barsCount = bars.length;
      const step = Math.max(1, Math.floor(dataArray.length / barsCount));
      bars.forEach((bar, idx) => {
        const start = idx * step;
        const end =
          idx === barsCount - 1
            ? dataArray.length
            : Math.min(dataArray.length, start + step);
        let sum = 0;
        let count = 0;
        for (let i = start; i < end; i++) {
          sum += Math.abs(dataArray[i] - 128) / 128;
          count++;
        }
        const level = count ? sum / count : 0;
        const h = 6 + Math.round(level * 18);
        bar.style.height = `${h}px`;
        bar.style.opacity = String(0.35 + level * 0.65);
      });
      rafId = requestAnimationFrame(animate);
    };

    cancelAnimationFrame(rafId);
    animate();
  };

  audio.addEventListener("loadedmetadata", () => {
    duration.textContent = formatClock(
      Math.max(1, Math.round(audio.duration || 0)),
    );
  });

  playBtn.addEventListener("click", async () => {
    messages.querySelectorAll(".message-row.voice").forEach((otherRow) => {
      if (otherRow !== row) {
        const otherAudio = otherRow.querySelector("audio");
        if (otherAudio) otherAudio.pause();
        otherRow.classList.remove("playing");
      }
    });

    if (audio.paused) {
      await audio.play();
      row.classList.add("playing");
    } else {
      audio.pause();
      row.classList.remove("playing");
    }
  });

  audio.addEventListener("play", () => {
    row.classList.add("playing");
    startViz().catch(() => {});
  });
  audio.addEventListener("pause", () => {
    row.classList.remove("playing");
    stopViz();
  });
  audio.addEventListener("ended", () => {
    row.classList.remove("playing");
    stopViz();
  });

  resetBars();
}

function createVoiceMessageRow(
  classElement,
  audioSrc,
  imgUrl,
  text = "Voice message",
  replyName = null,
  replyText = null,
  seen = null,
  voiceLevels = null,
) {
  const row = document.createElement("div");
  row.classList.add("message-row", classElement, "voice");
  row.dataset.messageId = `msg-${++messageCounter}`;
  row.dataset.voiceLabel = text || "Voice message";
  row.dataset.name = classElement === "assistant" ? "Assistant" : "User";
  row.dataset.text = row.dataset.voiceLabel;

  const waveBars = buildVoiceWaveHTML(voiceLevels);
  const replyHTML = replyName
    ? `<div class="reply-preview"><div class="reply-preview-name">Replying to ${escapeHTML(replyName)}</div><div class="reply-preview-text">${escapeHTML(replyText || text || "Voice message")}</div></div>`
    : "";

  const voiceBubble = `
    <div class="bubble voice-bubble">
      ${replyHTML}
      <button type="button" class="voice-play" aria-label="Play voice">
        <svg class="voice-icon-play" viewBox="0 0 24 24"><path d="M8 5v14l11-7-11-7Z"></path></svg>
        <svg class="voice-icon-pause" viewBox="0 0 24 24"><path d="M8 6h3v12H8z"></path><path d="M13 6h3v12h-3z"></path></svg>
      </button>
      <div class="voice-wave">${waveBars}</div>
      <span class="voice-duration">00:00</span>
      <audio src="${audioSrc}" preload="metadata"></audio>
    </div>
  `;

  const avatarHTML = `
    <div class="avatar" aria-hidden="true">
      <img src="${imgUrl}" alt="">
    </div>
  `;

  if (classElement === "assistant") {
    row.innerHTML = `${voiceBubble}${seen ? `<div class="seen-meta ${seen === "seen" ? "seen" : "no-seen"}"><span class="seen-time">15:32</span><span class="seen-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M1 12.5 6 17l7-8"></path><path d="M10 12.5 15 17l8-9"></path></svg></span></div>` : ""}${avatarHTML}`;
  } else {
    row.innerHTML = `${avatarHTML}${voiceBubble}`;
  }

  return row;
}

function bindMessageRow(row) {
  ensureActions(row);
  setupVoicePlayback(row);
  if (!row.dataset.messageId) row.dataset.messageId = `msg-${++messageCounter}`;
  const data = extractMessageData(row);
  row.dataset.name = data.name;
  row.dataset.text = data.text;
  if (row.dataset.boundInteractions === "true") return;
  row.dataset.boundInteractions = "true";

  row.addEventListener("click", (e) => {
    const replyBtn = e.target.closest(".reply-btn");
    const reactBtn = e.target.closest(".react-btn");
    const emojiBtn = e.target.closest(".reaction-picker button");
    const interactive = e.target.closest(
      "button, a, input, textarea, select, audio, .reaction-picker, .message-actions",
    );

    if (replyBtn) {
      openReply(row);
      row.classList.remove("show-picker");
      return;
    }
    if (reactBtn) {
      row.classList.toggle("show-picker");
      return;
    }
    if (emojiBtn) {
      addReaction(row, emojiBtn.dataset.emoji);
      setReaction(row, emojiBtn.dataset.emoji);
      row.classList.remove("show-picker");
      return;
    }
    if (e.target.closest(".bubble") && !interactive) {
      openReply(row);
    }
  });
}

function appendVoiceMessage(url, voiceLevels = null) {
  const levels = voiceLevels || createVoiceWaveLevels(18, messageCounter + 1);
  const row = createVoiceMessageRow(
    "assistant",
    url,
    "http://system-syntax.local/images/content/sections/img-dashbord.png",
    "Voice message",
    null,
    null,
    null,
    levels,
  );
  messages.appendChild(row);
  bindMessageRow(row);
  messages.scrollTop = messages.scrollHeight;
}

function createMessage(
  classElement,
  type,
  URLFile = null,
  imgUrl = null,
  text = null,
  replyName = null,
  replyText = null,
  time = null,
  reactionCount = null,
  reactionEmoji = null,
  seen = null,
  voiceLevels = null,
  callData = null,
) {
  if (time) {
    const timeDivider = document.createElement("div");
    timeDivider.classList.add("time-divider");
    timeDivider.textContent = time;
    return timeDivider;
  }

  if (type === "voice") {
    return createVoiceMessageRow(
      classElement,
      URLFile,
      imgUrl,
      text,
      replyName,
      replyText,
      seen,
      voiceLevels,
    );
  }

  if (type === "call") {
    return createCallMessage({
      ...callData,
      direction: callData?.direction || "incoming",
      missed: callData?.missed ?? true,
      kind: callData?.kind || "call",
      name: callData?.name || "User",
      time: callData?.time || "",
      classElement,
      seen,
    });
  }

  const row = document.createElement("div");
  const avatar = document.createElement("div");
  const img = document.createElement("img");
  const bubble = document.createElement("div");
  const p = document.createElement("p");
  row.classList.add("message-row", classElement);

  avatar.classList.add("avatar");
  avatar.setAttribute("aria-hidden", "true");
  img.src = imgUrl;
  avatar.appendChild(img);
  bubble.classList.add("bubble");

  if (replyName) {
    const replayButton = document.createElement("a");
    const replyBarLine = document.createElement("div");
    const replyBarContent = document.createElement("div");
    const replyBarLabel = document.createElement("div");
    const replyBarName = document.createElement("div");
    const replyBarText = document.createElement("div");
    replayButton.href = "#";
    replayButton.classList.add("replay-button");
    replayButton.setAttribute("aria-label", "Replay");
    replyBarLine.classList.add("reply-bar-line");
    replyBarContent.classList.add("reply-bar-content");
    replyBarLabel.classList.add("reply-bar-label");
    replyBarLabel.textContent = "Replying to";
    replyBarName.classList.add("reply-bar-name");
    replyBarName.id = "replyBarName";
    replyBarName.textContent = replyName;
    replyBarText.classList.add("reply-bar-text");
    replyBarText.id = "replyBarText";
    replyBarText.textContent = replyText;
    replyBarContent.append(replyBarLabel, replyBarName, replyBarText);
    replayButton.append(replyBarLine, replyBarContent);
    bubble.append(replayButton);
  }

  if (type === "file") {
    const fileLink = document.createElement("a");
    fileLink.href = URLFile;
    fileLink.classList.add("main-file-box");
    fileLink.setAttribute("download", "");
    fileLink.innerHTML = `
      <div class="icon">
        <svg viewBox="0 0 24 24" fill="none">
          <path d="M4 7.5A2.5 2.5 0 0 1 6.5 5h11A2.5 2.5 0 0 1 20 7.5v9A2.5 2.5 0 0 1 17.5 19h-11A2.5 2.5 0 0 1 4 16.5v-9Z" stroke="var(--bg-color)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M7 9h10" stroke="var(--bg-color)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M7 12h6" stroke="var(--bg-color)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M7 15h8" stroke="var(--bg-color)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <p>${text}</p>
    `;
    row.classList.add("file");
    bubble.append(fileLink);
  } else {
    p.textContent = text;
    bubble.append(p);
  }

  if (reactionCount && reactionEmoji) {
    const reactionBar = document.createElement("div");
    reactionBar.classList.add("reaction-bar");
    const reactionPill = document.createElement("span");
    reactionPill.classList.add("reaction-pill");
    reactionPill.setAttribute("data-emoji", reactionEmoji || "❤️");
    reactionPill.setAttribute("data-count", reactionCount || "1");
    reactionPill.textContent = `${reactionEmoji || "❤️"} ${reactionCount || "1"}`;
    reactionBar.appendChild(reactionPill);
    bubble.appendChild(reactionBar);
  }

  if (classElement === "assistant" && seen) {
    const seenMeta = document.createElement("div");
    const seenTime = document.createElement("span");
    const seenIcon = document.createElement("span");
    seenMeta.classList.add("seen-meta", seen === "seen" ? "seen" : "no-seen");
    seenTime.classList.add("seen-time");
    seenTime.textContent = "15:32";
    seenIcon.classList.add("seen-icon");
    seenIcon.setAttribute("aria-hidden", "true");
    seenIcon.innerHTML = `
      <svg viewBox="0 0 24 24">
        <path d="M1 12.5 6 17l7-8"></path>
        <path d="M10 12.5 15 17l8-9"></path>
      </svg>
    `;
    seenMeta.append(seenTime, seenIcon);
    row.append(bubble, seenMeta, avatar);
  } else if (classElement === "user") {
    row.append(avatar, bubble);
  } else {
    row.append(bubble, avatar);
  };
  return row;
}

function renderMessages(massge) {
  if (massge[0] === "time-divider") {
    return createMessage(
      null,
      null,
      null,
      null,
      null,
      null,
      null,
      massge[1],
      null,
      null,
      massge[6],
    );
  }

  if (massge[2] === "voice") {
    return createMessage(
      massge[0],
      massge[2],
      massge[3],
      "http://system-syntax.local/images/content/sections/img-dashbord.png",
      massge[1],
      massge[4] ? massge[4][0] : null,
      massge[4] ? massge[4][1] : null,
      null,
      massge[5] ? massge[5][0] : null,
      massge[5] ? massge[5][1] : null,
      massge[6],
      massge[8] || null,   // voiceLevels
      null,                // callData
    );
  }

  if (massge[2] === "call") {
    return createMessage(
      massge[0],
      massge[2],
      null,
      "http://system-syntax.local/images/content/sections/img-dashbord.png",
      null,
      null,
      null,
      null,
      null,
      null,
      massge[6],
      null,                // voiceLevels
      massge[7] || null,   // callData
    );
  }
  return createMessage(
    massge[0],
    massge[2],
    massge[3],
    "http://system-syntax.local/images/content/sections/img-dashbord.png",
    massge[1],
    massge[4] ? massge[4][0] : null,
    massge[4] ? massge[4][1] : null,
    null,
    massge[5] ? massge[5][0] : null,
    massge[5] ? massge[5][1] : null,
    massge[6],
    null,
    null,
  );
};

function loadInfoPerson(imgSrc, name) {
  chatCardHeaderInfo.innerHTML = "";
  chatCardHeaderControls.innerHTML = "";
  const header = document.createElement("header");
  header.className = "topbar";
  const brand = document.createElement("div");
  brand.className = "brand";
  const brandBadge = document.createElement("div");
  brandBadge.className = "brand-badge";
  brandBadge.setAttribute("aria-hidden", "true");
  const avatarClone = imgSrc.cloneNode(true);
  brandBadge.appendChild(avatarClone);
  const brandTitle = document.createElement("div");
  brandTitle.className = "brand-title";
  const title = document.createElement("h1");
  title.textContent = name;
  const badge = document.createElement("p");
  badge.textContent = "Beta";
  brandTitle.append(title, badge);
  brand.append(brandBadge, brandTitle);
  header.appendChild(brand);
  chatCardHeaderInfo.appendChild(header);
  const buttons = document.createElement("div");
  buttons.className = "buttons";
  function createButton(svgHTML, id = "", link) {
    let btn;
    if (link) {
      btn = document.createElement("a");
      btn.href = "/call";
    } else {
      btn = document.createElement("button");
      btn.type = "button";
    }
    btn.className = "list";
    if (id) btn.id = id;
    const icon = document.createElement("span");
    icon.innerHTML = svgHTML;
    btn.appendChild(icon.firstElementChild);
    return btn;
  };
  const videoBtn = createButton(`
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="3" y="6" width="13" height="12" rx="3" fill="var(--bg-color)"/>
      <path d="M16 10L21 7.5V16.5L16 14V10Z" fill="var(--bg-color)"/>
    </svg>
  `, "btnVideo", true);
  const callBtn = createButton(`
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M6.6 10.8C8.2 14.1 9.9 15.8 13.2 17.4L15.4 15.2C15.7 14.9 16.1 14.8 16.5 14.9C17.7 15.3 19 15.5 20.3 15.5C20.8 15.5 21.2 15.9 21.2 16.4V20C21.2 20.6 20.8 21 20.2 21C10.7 21 3 13.3 3 3.8C3 3.2 3.4 2.8 4 2.8H7.6C8.1 2.8 8.5 3.2 8.5 3.7C8.5 5 8.7 6.3 9.1 7.5C9.2 7.9 9.1 8.3 8.8 8.6L6.6 10.8Z" fill="var(--bg-color)"/>
    </svg>
  `, "btnVoice", true);
  const menuTrigger = document.createElement("button");
  menuTrigger.type = "button";
  menuTrigger.className = "list";
  menuTrigger.id = "menuTrigger";
  menuTrigger.innerHTML = `
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="12" cy="5" r="2" fill="var(--bg-color)"/>
      <circle cx="12" cy="12" r="2" fill="var(--bg-color)"/>
      <circle cx="12" cy="19" r="2" fill="var(--bg-color)"/>
    </svg>
  `;

  buttons.append(videoBtn, callBtn, menuTrigger);
  const menuWrap = document.createElement("div");
  menuWrap.className = "menu-wrap";
  menuWrap.id = "menuWrap";
  const fancyMenu = document.createElement("div");
  fancyMenu.className = "fancy-menu";
  fancyMenu.id = "fancyMenu";
  fancyMenu.setAttribute("role", "menu");
  fancyMenu.setAttribute("aria-hidden", "true");
  function createMenuItem({ className = "", label, iconSVG }) {
    const item = document.createElement("button");
    item.type = "button";
    item.className = `fancy-item ${className}`.trim();
    item.setAttribute("role", "menuitem");
    const icon = document.createElement("span");
    icon.className = "icon";
    icon.innerHTML = iconSVG;
    const text = document.createElement("span");
    text.textContent = label;
    item.append(icon, text);
    return item;
  };
  const pinItem = createMenuItem({
    className: "active",
    label: "Pin chat",
    iconSVG: `
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
        <path d="M12 3L14.8 8.2L20.5 9L16.2 13.1L17.2 19L12 16.2L6.8 19L7.8 13.1L3.5 9L9.2 8.2L12 3Z"
              stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
      </svg>
    `,
  });
  const muteItem = createMenuItem({
    label: "Mute notifications",
    iconSVG: `
      <svg width="20" height="20" viewBox="1 -1 20 20" fill="none">
        <path d="M12 3C9.79 3 8 4.79 8 7V9.5C8 10.33 7.68 11.12 7.12 11.71L6 13H18L16.88 11.71C16.32 11.12 16 10.33 16 9.5V7C16 4.79 14.21 3 12 3Z"
              stroke="var(--bg-color)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <circle cx="12" cy="15.8" r="1" fill="var(--bg-color)"/>
        <path d="M6 4L18 16" stroke="var(--bg-color)" stroke-width="1.8" stroke-linecap="round"/>
      </svg>
    `,
  });
  const deleteItem = createMenuItem({
    className: "danger",
    label: "Delete conversation",
    iconSVG: `
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
        <path d="M4 7H20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
        <path d="M9 7V5C9 4.4 9.4 4 10 4H14C14.6 4 15 4.4 15 5V7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
        <path d="M7 7L8 19C8.1 20 8.6 20 9.5 20H14.5C15.4 20 15.9 20 16 19L17 7" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
        <path d="M10 11V16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
        <path d="M14 11V16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
      </svg>
    `,
  });
  fancyMenu.append(pinItem, muteItem, deleteItem);
  menuWrap.appendChild(fancyMenu);
  buttons.appendChild(menuWrap);
  chatCardHeaderControls.appendChild(buttons);
  menuTrigger.addEventListener("click", (e) => {
    e.stopPropagation();
    menuWrap.classList.toggle("open");
    fancyMenu.setAttribute(
      "aria-hidden",
      menuWrap.classList.contains("open") ? "false" : "true"
    );
  });
  document.addEventListener("click", (e) => {
    if (!menuWrap.contains(e.target)) {
      menuWrap.classList.remove("open");
      fancyMenu.setAttribute("aria-hidden", "true");
    };
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      menuWrap.classList.remove("open");
      fancyMenu.setAttribute("aria-hidden", "true");
    };
  });
};

function loadMessages(row) {
  bindMessageRow(row);
}

function createCallMessage({
  kind = "call",
  missed = true,
  direction = "incoming",
  time = "",
  name = "User",
  classElement = "assistant",
  seen = "seen",
}) {
  const row = document.createElement("div");
  row.className = `message-row call ${kind} ${missed ? "missed" : ""} ${classElement}`;
  row.dataset.messageId = `msg-${++messageCounter}`;

  const avatar = document.createElement("div");
  avatar.className = "avatar";
  avatar.setAttribute("aria-hidden", "true");
  avatar.innerHTML = `
    <img src="http://system-syntax.local/images/content/sections/img-dashbord.png" alt="">
  `;

  const bubble = document.createElement("div");
  bubble.className = "bubble";

  const icon = document.createElement("div");
  icon.className = "call-icon";

  const content = document.createElement("div");
  content.className = "call-content";

  const title = document.createElement("div");
  title.className = "call-title";

  const subtitle = document.createElement("div");
  subtitle.className = "call-subtitle";

  const meta = document.createElement("div");
  meta.className = "call-meta";
  meta.textContent = time;

  if (kind === "video") {
    icon.innerHTML = `
      <svg viewBox="0 0 24 24">
        <rect x="3" y="6" width="13" height="12" rx="3"></rect>
        <path d="M16 10L21 7.5V16.5L16 14V10Z"></path>
      </svg>
    `;
    title.textContent = missed ? "Missed video call" : "Video call";
  } else {
    icon.innerHTML = `
      <svg viewBox="0 0 24 24">
        <path d="M6.6 10.8C8.2 14.1 9.9 15.8 13.2 17.4L15.4 15.2C15.7 14.9 16.1 14.8 16.5 14.9C17.7 15.3 19 15.5 20.3 15.5C20.8 15.5 21.2 15.9 21.2 16.4V20C21.2 20.6 20.8 21 20.2 21C10.7 21 3 13.3 3 3.8C3 3.2 3.4 2.8 4 2.8H7.6C8.1 2.8 8.5 3.2 8.5 3.7C8.5 5 8.7 6.3 9.1 7.5C9.2 7.9 9.1 8.3 8.8 8.6L6.6 10.8Z"></path>
      </svg>
    `;
    title.textContent = missed ? "Missed call" : "Call";
  }

  subtitle.textContent =
    direction === "incoming" ? `from ${name}` : `to ${name}`;

  content.append(title, subtitle, meta);
  bubble.append(icon, content);

  const seenMeta = document.createElement("div");
  seenMeta.className = `seen-meta ${seen === "seen" ? "seen" : "no-seen"}`;
  seenMeta.innerHTML = `
    <span class="seen-time">${time || ""}</span>
    <span class="seen-icon" aria-hidden="true">
      <svg viewBox="0 0 24 24">
        <path d="M1 12.5 6 17l7-8"></path>
        <path d="M10 12.5 15 17l8-9"></path>
      </svg>
    </span>
  `;

  if (classElement === "assistant") {
    row.append(bubble, seenMeta, avatar);
  } else {
    row.append(avatar, bubble);
  }

  return row;
}

function initializeMessages() {
  messages.innerHTML = "";
  composer.classList.remove("hidden");
  Messages.forEach((msg) => {
    const row = renderMessages(msg);
    messages.appendChild(row);
    if (row.classList && row.classList.contains("message-row")) {
      loadMessages(row);
    }
  });
  box.scrollTo({ top: box.scrollHeight, behavior: "smooth" });
}

function renderContactSelection(btn) {
  contact.forEach((b) => b.classList.remove("active"));
  btn.classList.add("active");
  const img = btn.querySelector(".img");
  const name = btn.querySelector("h3");
  if (img && name) {
    chatCardHeaderInfo.innerHTML = "";
    loadInfoPerson(img, name.textContent);
  };
  initializeMessages();
};

contact.forEach((btn) => {
  btn.addEventListener("click", () => renderContactSelection(btn));
});

document.querySelectorAll(".message-row").forEach((row) => {
  bindMessageRow(row);
});

document.addEventListener("click", (e) => {
  if (
    !e.target.closest(".message-row") &&
    !e.target.closest(".attach-menu") &&
    !e.target.closest(".attach-trigger")
  ) {
    document
      .querySelectorAll(".message-row.show-picker")
      .forEach((row) => row.classList.remove("show-picker"));
  }
});

replyCancel.addEventListener("click", closeReply);
textarea.addEventListener("input", updateComposerButton);
voiceCancel?.addEventListener("click", () =>
  stopVoiceRecording({ cancel: true }),
);

sendOrRecordBtn.addEventListener("click", (e) => {
  e.preventDefault();
  if (isRecording) {
    stopVoiceRecording();
    return;
  }
  if (hasComposerText()) {
    form.requestSubmit();
    return;
  }
  startVoiceRecording();
});

updateComposerButton();

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const value = textarea.value.trim();
  if (!value) return;
  const row = document.createElement("div");
  row.className = "message-row assistant";
  row.dataset.messageId = `msg-${++messageCounter}`;
  row.innerHTML = `
    <div class="bubble">
      ${replyTarget ? renderReplyPreview(replyTarget) : ""}
      ${escapeHTML(value)}
    </div>
    <div class="avatar" aria-hidden="true">
      <svg viewBox="0 0 24 24">
        <path d="M12 2 2 7l10 5 10-5-10-5Zm0 7L2 4v12l10 5 10-5V4l-10 5Z" />
      </svg>
    </div>
  `;
  messages.appendChild(row);
  bindMessageRow(row);
  textarea.value = "";
  closeReply();
  closeReaction();
  updateComposerButton();
  messages.scrollTop = messages.scrollHeight;
});

contact.forEach((btn) => {
  btn.addEventListener("click", () => {
    contact.forEach((btn) => {btn.classList.remove("active")});
    renderContactSelection(btn);
    btn.classList.add("active");
  });
});

document.addEventListener("click", (e) => {
  if (
    !e.target.closest(".message-row") &&
    !e.target.closest(".attach-menu") &&
    !e.target.closest(".attach-trigger")
  ) {
    document
      .querySelectorAll(".message-row.show-picker")
      .forEach((row) => row.classList.remove("show-picker"));
  }
});

box.scrollTo({ top: box.scrollHeight, behavior: "smooth" });
// initializeMessages();