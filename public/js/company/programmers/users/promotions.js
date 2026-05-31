let btnAddPersonInBranch = document.querySelectorAll(".state-btn");
let inputGroupId = document.getElementById("promotion-id");

btnAddPersonInBranch.forEach(button => {
  button.addEventListener("click", () => {
    let id = button.getAttribute("data-id");
    inputGroupId.value = id;
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const popup = document.querySelector('.main-form[data-follow="show-promotion"]');
  const popupIcon = popup.querySelector(".promotion-show-icon");
  const popupTitle = popup.querySelector(".promotion-show-title-wrap h2");
  const popupBadge = popup.querySelector(".promotion-show-badge");
  const popupEmployees = popup.querySelector(".promotion-show-employees");
  const detailButtons = document.querySelectorAll('.promotions-page__card-btn[data-follow="show-promotion"]');
  detailButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const card = button.closest(".promotions-page__card");
      if (!card) return;
      const icon = card.querySelector(".promotions-page__card-icon").innerHTML;
      const title = card.querySelector(".promotions-page__card-title").textContent;
      const employeesCount = card.querySelector(".promotions-page__metric-value").textContent;
      const avatars = card.querySelectorAll(".promotions-page__avatar-button");
      let employeesHTML = "";
      avatars.forEach((employee, index) => {
        const img = employee.querySelector("img");
        employeesHTML += `
          <a href="${employee.href}" class="promotion-employee-card">
            <img src="${img.src}" alt="${img.alt}" />
            <div class="promotion-employee-info">
              <strong>Employee ${index + 1}</strong>
              <span>Company Employee</span>
            </div>
            <form action="">
              <button aria-label="Delete item" class="delete-button">
                <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                  <g id="trash-can">
                    <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                    <g transform-origin="12 18" id="lid-group">
                      <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b" ></rect>
                      <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b" ></rect>
                    </g>
                  </g>
                </svg>
              </button>
            </form>
          </a>
        `;
      });
      popupIcon.innerHTML = icon;
      popupTitle.textContent = title;
      popupBadge.textContent = `${employeesCount} Employees`;
      popupEmployees.innerHTML = employeesHTML;
    });
  });
});