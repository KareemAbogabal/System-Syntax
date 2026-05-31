document.addEventListener("DOMContentLoaded", () => {
  const detailBtns = document.querySelectorAll(".js-hosting-details");
  detailBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const icon = btn.dataset.icon || "Hosting Alert";
      const title = btn.dataset.title || "—";
      const site = btn.dataset.site || "—";
      const client = btn.dataset.client || "—";
      const clientUrl = btn.dataset.clientUrl || "#";
      const renewalDate = btn.dataset.renewalDate || "—";
      const remainingTime = btn.dataset.remainingTime || "—";
      const statusText = btn.dataset.statusText || "—";
      const description = btn.dataset.description || "—";
      const packageName = btn.dataset.package || "—";
      const project = btn.dataset.project || "—";
      const id = btn.dataset.id || "—";
      document.getElementById("hostingViewBadge").textContent = icon;
      document.getElementById("hostingViewTitle").textContent = title;
      document.getElementById("hostingViewSub").textContent = description;
      document.getElementById("hostingViewSite").textContent = site;
      const clientLink = document.getElementById("hostingViewClientLink");
      clientLink.textContent = client;
      clientLink.href = clientUrl;
      document.getElementById("hostingViewRenewal").textContent = renewalDate;
      document.getElementById("hostingViewRemaining").textContent = remainingTime;
      document.getElementById("hostingViewStatus").textContent = statusText;
      document.getElementById("hostingViewStatusText").textContent = statusText;
      document.getElementById("hostingViewType").textContent = icon;
      document.getElementById("hostingViewDays").textContent = btn.dataset.days || remainingTime;
      document.getElementById("hostingViewDescription").textContent = description;
      document.getElementById("hostingViewPackage").textContent = packageName;
      document.getElementById("hostingViewProject").textContent = project;
      document.getElementById("hostingViewId").textContent = id;
    });
  });
});