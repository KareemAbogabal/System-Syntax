// let buttonStatusProject = document.querySelectorAll("[data-state-project]");

// buttonStatusProject.forEach(button => {
//   button.addEventListener("click", () => {
//     let status = button.getAttribute("data-state-project");
//     let dataFollowButton = button.getAttribute("data-follow");
//     mainForms.forEach((card) => {
//       let dataFollowForm = card.getAttribute("data-follow");
//       if ((dataFollowButton == dataFollowForm)) {
//         let file = card.querySelector(".file-explorer");
//         let fileName = card.querySelector("#file-name");
//         if (dataFollowForm == "upload") {
//           let fileElement = fileName.closest(".perant-input");
//           let lable = fileElement.querySelector("label");
//           if (status == "wordPress") {
//             lable.innerHTML = "Enter link WordPress project";
//             fileName.placeholder = "Enter link WordPress project";
//             fileName.name = "link_website";
//           } else {
//             lable.innerHTML = "file name";
//             fileName.placeholder = "Enter file name";
//             fileName.name = "file_name";
//           };
//         };
//         if (status == "wordPress") {
//           file.style.display = "none";
//         } else {
//           file.style.display = "block";
//         };
//       };
//     });
//   });
// });