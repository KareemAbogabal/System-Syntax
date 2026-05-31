const startBtnVideoScreen = document.getElementById("startBtnVideoScreen");
const startBtnVoice = document.getElementById("startBtnVoice");
const downloadBtn = document.getElementById("download");
const mainWords = document.querySelector(".company-calls-room .words-apeech");
const words = document.querySelector(".words");

let recorder;
let recordedChunks = [];
let recognition = null;
let keepRecognizing = true;

let currentElement = null;
let currentUL = null;
let currentOl = null;

function safeText(value) {
  return typeof value === "string" ? value.trim() : "";
}

function showTempMessage(text) {
  const note = document.createElement("div");
  note.className = "app-notification";
  note.textContent = text;
  document.body.appendChild(note);

  setTimeout(() => note.classList.add("hide"), 2200);
  setTimeout(() => note.remove(), 2800);
}

function reg(text) {
  const headerPatterns = [
    /مهم/ig,
    /العنوان/ig,
    /عنوان/ig,
    /اول حاجة/ig,
    /الاول/ig,
  ];

  if (headerPatterns.some((pattern) => pattern.test(text))) {
    important(text);
    return;
  }

  const olPatterns = [
    /(حاجة|حاجه)/ig,
    /(اول حاجة|اول حاجه)/ig,
    /(ثاني حاجة|ثاني حاجه)/ig,
    /(تاني حاجة|تاني حاجه)/ig,
    /(ثالث حاجة|ثالث حاجه)/ig,
    /(رابع حاجة|رابع حاجه)/ig,
    /(خامس حاجة|خامس حاجه)/ig,
    /(سادس حاجة|سادس حاجه)/ig,
    /(سابع حاجة|سابع حاجه)/ig,
    /(ثامن حاجة|ثامن حاجه)/ig,
    /(تامن حاجة|تامن حاجه)/ig,
    /(تاسع حاجة|تاسع حاجه)/ig,
    /(عاشر حاجة|عاشر حاجه)/ig,
  ];

  if (olPatterns.some((pattern) => pattern.test(text))) {
    importantListOl(text);
    return;
  }

  importantListUl(text);
}

function important(text) {
  const patterns = [/مهم/ig, /العنوان/ig];

  if (patterns.some((pattern) => pattern.test(text))) {
    currentElement = document.createElement("h1");
    const clean = text.replace(/مهم|العنوان/ig, "").trim();
    currentElement.textContent = clean;
    words?.appendChild(currentElement);
    currentUL = null;
    currentOl = null;
  } else {
    importantListUl(text);
  }
}

function importantListUl(text) {
  const patterns = [
    /(نقطة|نقطه)/ig,
    /(اول نقطة|اول نقطه)/ig,
    /(ثاني نقطة|ثاني نقطه)/ig,
    /(تاني نقطة|اتاني قطه)/ig,
    /(ثالث نقطة|ثالث نقطه)/ig,
    /(تالت نقطة|تالت نقطه)/ig,
    /(رابع نقطة|رابع نقطه)/ig,
    /(خامس نقطة|خامس نقطه)/ig,
    /(سادس نقطة|سادس نقطه)/ig,
    /(سابع نقطة|سابع نقطه)/ig,
    /(ثامن نقطة|ثامن نقطه)/ig,
    /(تامن نقطة|تامن نقطه)/ig,
    /(تاسع نقطة|تاسع نقطه)/ig,
    /(عاشر نقطة|عاشر نقطه)/ig,
  ];

  if (patterns.some((pattern) => pattern.test(text))) {
    if (!currentUL) {
      currentUL = document.createElement("ul");
      words?.appendChild(currentUL);
    }

    const matchedPattern = patterns.find((pattern) => pattern.test(text));
    const clean = matchedPattern ? text.replace(matchedPattern, "").trim() : text.trim();

    currentElement = document.createElement("li");
    currentElement.textContent = clean;
    currentUL.appendChild(currentElement);
  } else {
    if (currentElement) {
      currentElement.textContent += (currentElement.textContent ? " " : "") + text.trim();
    } else {
      importantListOl(text);
    }
  }
}

function importantListOl(text) {
  const patterns = [
    /(حاجة|حاجه)/ig,
    /(اول حاجة|اول حاجه)/ig,
    /(ثاني حاجة|ثاني حاجه)/ig,
    /(تاني حاجة|تاني حاجه)/ig,
    /(ثالث حاجة|ثالث حاجه)/ig,
    /(تالت حاجة|تالت حاجه)/ig,
    /(رابع حاجة|رابع حاجه)/ig,
    /(خامس حاجة|خامس حاجه)/ig,
    /(سادس حاجة|سادس حاجه)/ig,
    /(سابع حاجة|سابع حاجه)/ig,
    /(ثامن حاجة|ثامن حاجه)/ig,
    /(تامن حاجة|تامن حاجه)/ig,
    /(تاسع حاجة|تاسع حاجه)/ig,
    /(عاشر حاجة|عاشر حاجه)/ig,
  ];

  if (patterns.some((pattern) => pattern.test(text))) {
    if (!currentOl) {
      currentOl = document.createElement("ol");
      words?.appendChild(currentOl);
    }

    const matchedPattern = patterns.find((pattern) => pattern.test(text));
    const clean = matchedPattern ? text.replace(matchedPattern, "").trim() : text.trim();

    currentElement = document.createElement("li");
    currentElement.textContent = clean;
    currentOl.appendChild(currentElement);
  } else {
    if (currentElement) {
      currentElement.textContent += (currentElement.textContent ? " " : "") + text.trim();
    } else {
      addWordes(text);
    }
  }
}

function addWordes(text) {
  const p = document.createElement("p");
  p.textContent = text;
  words?.appendChild(p);
  currentElement = p;
  currentUL = null;
  currentOl = null;
}

function speech() {
  window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

  if (!window.SpeechRecognition) {
    showTempMessage("Speech recognition is not supported in this browser");
    return;
  }

  recognition = new window.SpeechRecognition();
  recognition.continuous = true;
  recognition.lang = "ar-EG";
  recognition.interimResults = true;

  recognition.addEventListener("result", (e) => {
    for (let i = e.resultIndex; i < e.results.length; i++) {
      const result = e.results[i];
      if (result.isFinal) {
        const text = safeText(result[0].transcript);
        if (text) {
          reg(text);
        }
      }
    }
  });

  recognition.addEventListener("end", () => {
    if (keepRecognizing) {
      try {
        recognition.start();
      } catch (err) {
        console.warn(err);
      }
    }
  });

  recognition.addEventListener("error", (e) => {
    console.warn("SpeechRecognition error:", e.error);
  });

  keepRecognizing = true;

  try {
    recognition.start();
  } catch (err) {
    console.warn(err);
  }
}

function stopSpeech() {
  keepRecognizing = false;

  if (recognition) {
    try {
      recognition.stop();
    } catch (err) {
      console.warn(err);
    }
  }
}

window.addEventListener("load", () => {
  if (startBtnVideoScreen) {
    startBtnVideoScreen.classList.add("start-record");
  }
});

startBtnVideoScreen?.addEventListener("click", async () => {
  if (startBtnVideoScreen.classList.contains("start-record")) {
    startBtnVideoScreen.innerHTML = `Stop Record <i class="fa-solid fa-circle-stop"></i>`;
    startBtnVideoScreen.classList.remove("start-record");
    startBtnVideoScreen.classList.add("in-use");

    try {
      const screenStream = await navigator.mediaDevices.getDisplayMedia({
        video: { mediaSource: "screen" },
        audio: false
      });

      const audioTracks = [];

      if (window.localStream) {
        audioTracks.push(...window.localStream.getAudioTracks());
      }

      if (window.lastRemoteStream) {
        audioTracks.push(...window.lastRemoteStream.getAudioTracks());
      }

      const mixedStream = new MediaStream([
        ...screenStream.getVideoTracks(),
        ...audioTracks
      ]);

      const possibleTypes = [
        "video/webm;codecs=vp9",
        "video/webm;codecs=vp8",
        "video/webm"
      ];

      const chosenType = possibleTypes.find((type) => MediaRecorder.isTypeSupported(type));
      recorder = chosenType
        ? new MediaRecorder(mixedStream, { mimeType: chosenType })
        : new MediaRecorder(mixedStream);

      recordedChunks = [];

      recorder.ondataavailable = (e) => {
        if (e.data.size > 0) {
          recordedChunks.push(e.data);
        }
      };

      recorder.onstop = () => {
        const blob = new Blob(recordedChunks, { type: "video/webm" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.style.display = "none";
        a.href = url;
        a.download = "recording.webm";
        document.body.appendChild(a);
        a.click();

        setTimeout(() => {
          document.body.removeChild(a);
          URL.revokeObjectURL(url);
        }, 100);
      };

      recorder.start(100);
      showTempMessage("Screen recording started");
    } catch (err) {
      console.error("خطأ في الحصول على صلاحية الشاشة:", err);
      showTempMessage("Screen recording permission failed");
      startBtnVideoScreen.innerHTML = `Record Video <i class="fa-solid fa-record-vinyl"></i>`;
      startBtnVideoScreen.classList.add("start-record");
      startBtnVideoScreen.classList.remove("in-use");
    }
  } else {
    startBtnVideoScreen.innerHTML = `Record Video <i class="fa-solid fa-record-vinyl"></i>`;
    startBtnVideoScreen.classList.add("start-record");
    startBtnVideoScreen.classList.remove("in-use");

    if (recorder && recorder.state !== "inactive") {
      recorder.stop();
    }
  }
});

startBtnVoice?.addEventListener("click", () => {
  startBtnVoice.classList.toggle("in-use");
  mainWords.classList.toggle("show");
  if (startBtnVoice.classList.contains("in-use")) {
    speech();
    showTempMessage("Voice recording started");
  } else {
    stopSpeech();
    showTempMessage("Voice recording stopped");
  }
});

function downloadWords() {
  let output = "";

  function traverse(element) {
    for (const node of element.childNodes) {
      if (node.nodeType === 1) {
        switch (node.tagName.toLowerCase()) {
          case "h1":
            output += `# ${node.textContent.trim()}\n\n`;
            break;
          case "p":
            output += `${node.textContent.trim()}\n\n`;
            break;
          case "ul":
            for (const li of node.children) {
              output += `- ${li.textContent.trim()}\n`;
            }
            output += "\n";
            break;
          case "ol":
            let i = 1;
            for (const li of node.children) {
              output += `${i++}. ${li.textContent.trim()}\n`;
            }
            output += "\n";
            break;
        }
      }
    }
  }

  if (!words) {
    showTempMessage("No transcript area found");
    return;
  }

  traverse(words);

  const blob = new Blob([output], { type: "text/plain;charset=utf-8" });
  const url = URL.createObjectURL(blob);
  const a = document.createElement("a");
  a.href = url;
  a.download = "comments.txt";
  a.click();
  URL.revokeObjectURL(url);
}

downloadBtn?.addEventListener("click", () => {
  downloadWords();
});