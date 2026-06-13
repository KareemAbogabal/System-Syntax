const ratingButtons = document.querySelectorAll(".luxury-rating button");
const ratingLabel = document.querySelector(".rating-label");
const ratingState = document.querySelector(".rating-state");
const visibilityCheck = document.getElementById("visibilityCheck");
const approvalStatus = document.querySelector(".approval-status");

const discountNumber = document.getElementById("discountNumber");
const discountValue = document.querySelector(".discount-value");

let selectedRating = null;

const ratingMap = {
  1: "Critical",
  2: "Needs Improvement",
  3: "Stable",
  4: "Refined",
  5: "Exceptional"
};

visibilityCheck.disabled = true;

ratingButtons.forEach(button => {
  button.addEventListener("click", () => {

    ratingButtons.forEach(btn => {
      btn.classList.remove("active");
    });

    button.classList.add("active");

    selectedRating = Number(button.dataset.rate);

    ratingLabel.textContent =
      `Selected level: ${selectedRating}/5`;

    ratingState.textContent =
      ratingMap[selectedRating];

    visibilityCheck.disabled = false;

    approvalStatus.classList.remove("active");
    approvalStatus.textContent =
      "Visibility approval available";

    // الخصم = التقييم × 2
    const discount = selectedRating * 2;

    discountNumber.textContent = discount;

    discountValue.classList.remove("active");

    setTimeout(() => {
      discountValue.classList.add("active");
    }, 20);

  });
});

visibilityCheck.addEventListener("change", () => {

  if (visibilityCheck.checked) {

    approvalStatus.classList.add("active");

    approvalStatus.textContent =
      "Visibility policy approved successfully";

  } else {

    approvalStatus.classList.remove("active");

    approvalStatus.textContent =
      "Visibility approval pending";

  }

});