const firstInput = document.getElementById("password-one");
const secondInput = document.getElementById("password-two");
const resetBtn = document.getElementById("resetPasswordBtn");
const ruleMap = {
  length: document.querySelector('[data-rule="length"]'),
  upper: document.querySelector('[data-rule="upper"]'),
  lower: document.querySelector('[data-rule="lower"]'),
  number: document.querySelector('[data-rule="number"]'),
  symbol: document.querySelector('[data-rule="symbol"]'),
};

function generatePassword(length = 12) {
  const upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  const lower = "abcdefghijklmnopqrstuvwxyz";
  const number = "0123456789";
  const symbol = "!@#$%^&*()_+-=[]{}|;:,.<>?";
  const all = upper + lower + number + symbol;
  let password = [
    upper[Math.floor(Math.random() * upper.length)],
    lower[Math.floor(Math.random() * lower.length)],
    number[Math.floor(Math.random() * number.length)],
    symbol[Math.floor(Math.random() * symbol.length)],
  ];
  while (password.length < length) {
    password.push(all[Math.floor(Math.random() * all.length)]);
  }
  for (let i = password.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [password[i], password[j]] = [password[j], password[i]];
  }
  return password.join("");
}

function validatePassword(password) {
  const rules = {
    length: password.length >= 8,
    upper: /[A-Z]/.test(password),
    lower: /[a-z]/.test(password),
    number: /[0-9]/.test(password),
    symbol: /[^A-Za-z0-9]/.test(password),
  };
  Object.keys(ruleMap).forEach((key) => {
    ruleMap[key].classList.toggle("ok", rules[key]);
  });
};

function setNewPassword() {
  const password1 = generatePassword(14);
  const password2 = generatePassword(14);
  firstInput.value = password1;
  secondInput.value = password2;
  validatePassword(password);
};

resetBtn.addEventListener("click", setNewPassword);

setNewPassword();