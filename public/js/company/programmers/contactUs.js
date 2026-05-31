const requestType = document.getElementById("type");
const interviewDate = document.getElementById("interview_date");
const interviewType = document.getElementById("interview_type");
const requestItem = document.querySelectorAll(".request-item");

requestItem.forEach(card => {
  const strong = card.querySelector(".request-info strong");
  const avatar = card.querySelector(".avatar");
  const fullName = strong.textContent.trim();
  const names = fullName.split(" ").filter(Boolean);
  let initials = "";
  
  if (names.length === 1) {
    initials = names[0].charAt(0);
  } else {
    initials = names[0].charAt(0) + names[names.length - 1].charAt(0);
  };
  avatar.textContent = initials.toUpperCase();
})

function toggleInterviewFields() {
  const isJobRequest = requestType.value === "job";
  interviewDate.disabled = !isJobRequest;
  interviewType.disabled = !isJobRequest;
  interviewDate.classList.toggle("disabled-input", !isJobRequest);
  interviewType.classList.toggle("disabled-input", !isJobRequest);
  if (!isJobRequest) {
    interviewDate.value = "";
    interviewType.value = "";
  };
};

toggleInterviewFields();

requestType.addEventListener("change", toggleInterviewFields);