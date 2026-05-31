const taskTitle = document.querySelector('.card-show [data-task-title]');
const taskDescriptionShort = document.querySelector('.card-show [data-task-description-short]');
const taskDescription = document.querySelector('.card-show [data-task-description]');
const taskProgressText = document.querySelector('.card-show [data-task-progress-text]');
const taskProgressNumber = document.querySelector('.card-show [data-task-progress-number]');
const taskProgressBar = document.querySelector('.card-show [data-task-progress-bar]');
const taskTeam = document.querySelector('.card-show [data-task-team]');
const taskLeader = document.querySelector('.card-show [data-task-leader]');
const taskAssignee = document.querySelector('.card-show [data-task-assignee]');
const taskFiles = document.querySelector('.card-show [data-task-files]');

document.querySelectorAll('[data-event]').forEach((card) => {
  card.addEventListener('click', () => {
    const title = card.dataset.title || 'Task';
    const description = card.dataset.description || '';
    const progress = Number(card.dataset.progress || 0);
    const team = card.dataset.team || '-';
    const leader = card.dataset.leader || '-';
    const assignee = card.dataset.assignee || '-';
    const files = JSON.parse(card.dataset.files || '[]');

    if (taskTitle) taskTitle.textContent = title;
    if (taskDescriptionShort) taskDescriptionShort.textContent = description;
    if (taskDescription) taskDescription.textContent = description;
    if (taskProgressText) taskProgressText.textContent = `${progress}%`;
    if (taskProgressNumber) taskProgressNumber.textContent = `${progress}%`;
    if (taskProgressBar) taskProgressBar.style.width = `${progress}%`;
    if (taskTeam) taskTeam.textContent = team;
    if (taskLeader) taskLeader.textContent = leader;
    if (taskAssignee) taskAssignee.textContent = assignee;

    if (taskFiles) {
      taskFiles.innerHTML = '';
      if (files.length) {
        files.forEach((file) => {
          const item = document.createElement('span');
          item.className = 'task-file';
          item.textContent = file;
          taskFiles.appendChild(item);
        });
      } else {
        taskFiles.innerHTML = '<span class="task-file">No uploaded files</span>';
      }
    }
  });
});