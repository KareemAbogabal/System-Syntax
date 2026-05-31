document.addEventListener("DOMContentLoaded", () => {
  const command = document.querySelector(".main-form .commands textarea");
  const consoleBox = document.querySelector("#commandConsole");
  if (!command || !consoleBox) return;
  const currentPath = consoleBox.dataset.currentPath || "C:\\Projects\\Nova";
  const prompt = `${currentPath}> `;
  command.value = prompt;
  command.focus();
  command.setSelectionRange(command.value.length, command.value.length);
  function getCurrentLineStart(text, caretPos) {
    return text.lastIndexOf("\n", caretPos - 1) + 1;
  };
  function getEditableStart() {
    const lineStart = getCurrentLineStart(command.value, command.value.length);
    return lineStart + prompt.length;
  };
  function moveCaretToEnd() {
    const end = command.value.length;
    command.setSelectionRange(end, end);
  };
  function selectionTouchesLockedArea() {
    const editableStart = getEditableStart();
    return command.selectionStart < editableStart || command.selectionEnd < editableStart;
  };
  command.addEventListener("keydown", (e) => {
    const editableStart = getEditableStart();
    const start = command.selectionStart;
    const end = command.selectionEnd;
    if (e.key === "Enter") {
      e.preventDefault();
      const currentLineStart = getCurrentLineStart(command.value, command.value.length);
      const currentLine = command.value.slice(currentLineStart);
      const commandText = currentLine.startsWith(prompt)
        ? currentLine.slice(prompt.length).trim()
        : currentLine.trim();
      console.log(commandText);
      command.value += "\n" + prompt;
      moveCaretToEnd();
      return;
    };
    if (e.key === "Backspace") {
      if (start <= editableStart && end <= editableStart) {
        e.preventDefault();
      }
      return;
    };
    if (e.key === "Delete") {
      if (start < editableStart || end < editableStart) {
        e.preventDefault();
      }
      return;
    };
  });
  command.addEventListener("beforeinput", (e) => {
    const editableStart = getEditableStart();
    if ((e.inputType.startsWith("delete") || e.inputType.startsWith("insert")) && (command.selectionStart < editableStart || command.selectionEnd < editableStart)) {
      e.preventDefault();
    };
  });
  command.addEventListener("input", () => {
    const editableStart = getEditableStart();
    if (command.selectionStart < editableStart || command.selectionEnd < editableStart) {
      moveCaretToEnd();
    };;
  });
  command.addEventListener("click", () => {
    const editableStart = getEditableStart();
    if (command.selectionStart < editableStart) {
      moveCaretToEnd();
    }
  });
  command.addEventListener("mouseup", () => {
    const editableStart = getEditableStart();
    if (command.selectionStart < editableStart) {
      moveCaretToEnd();
    };
  });
  command.addEventListener("paste", (e) => {
    const editableStart = getEditableStart();
    if (command.selectionStart < editableStart || command.selectionEnd < editableStart) {
      e.preventDefault();
      return;
    };
    const text = e.clipboardData.getData("text");
    if (text.includes("\n")) {
      e.preventDefault();
      document.execCommand("insertText", false, text.replace(/\n/g, " "));
    };
  });
});