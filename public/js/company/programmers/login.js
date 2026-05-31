let forms = document.querySelectorAll('.card');
let eye = document.querySelectorAll('.toggle-pass');
let btnForget = document.querySelector('.forget');
const toggleButtons = document.querySelectorAll(".toggle-password");

toggleButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const targetId = button.dataset.target;
    const input = document.getElementById(targetId);
    if (!input) return;
    const isPassword = input.type === "password";
    input.type = isPassword ? "text" : "password";
    button.classList.toggle("is-visible", isPassword);
    button.setAttribute("aria-label", isPassword ? "Hide password" : "Show password");
  });
});

btnForget.addEventListener("click", () => {
  forms[0].classList.add("hidden");
  forms[1].classList.remove("hidden");
});