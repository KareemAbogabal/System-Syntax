let ulItems = document.querySelectorAll("ul li a");
let textLink = document.querySelectorAll(".text-link");

document.addEventListener('DOMContentLoaded', function () {
  const pageTitle = document.title;
  let result = "";
  const sep = pageTitle.indexOf("|");
  if (sep !== -1) {
    result = pageTitle.slice(sep + 1).trim().toLowerCase();
  } else {
    result = pageTitle.trim().toLowerCase();
  };
  const titleWords = result.split(/\s+/);
  ulItems.forEach((link, i) => {
    const href = link.getAttribute('href') || '';
    if (href) {
      try {
        const target = new URL(href, location.origin);
        const current = new URL(location.href);
        if (target.pathname.replace(/\/+$/, '') === current.pathname.replace(/\/+$/, '')) {
          link.classList.add('active');
          return;
        };
      } catch (e) {
      };
    };
    const text = (typeof textLink !== 'undefined' && textLink[i])
      ? textLink[i].innerText.toLowerCase()
      : link.innerText.toLowerCase();
    const match = titleWords.some(word => text.includes(word));
    if (match) {
      link.classList.add("active");
    };
  });
});
