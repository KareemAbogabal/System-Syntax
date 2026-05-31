const input = document.getElementById("photo");
const preview = document.getElementById("photoPreview");
const placeholder = document.getElementById("avatarPlaceholder");

input.addEventListener("change", function () {
  const file = this.files[0];
  if (!file) return;
  const reader = new FileReader();
  reader.onload = function (e) {
    preview.src = e.target.result;
    preview.style.display = "block";
    placeholder.style.display = "none";
  };
  reader.readAsDataURL(file);
});
