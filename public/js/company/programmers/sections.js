let btnAddPersonInBranch = document.querySelectorAll(".state-btn");
let inputBranchId = document.getElementById("branch-id");

btnAddPersonInBranch.forEach(button => {
  button.addEventListener("click", () => {
    let id = button.getAttribute("data-id");
    inputBranchId.value = id;
  });
});