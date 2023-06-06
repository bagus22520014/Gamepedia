const body = document.querySelector("body");
const sidebar = document.querySelector(".sidebar");
const submenuItems = document.querySelectorAll(".submenu_item");
const sidebarOpen = document.querySelector("#sidebarOpen");
const sidebarClose = document.querySelector(".collapse_sidebar");
const sidebarExpand = document.querySelector(".expand_sidebar");
sidebarOpen.addEventListener("click", () => sidebar.classList.toggle("close"));

sidebarClose.addEventListener("click", () => {
  sidebar.classList.add("close", "hoverable");
});
sidebarExpand.addEventListener("click", () => {
  sidebar.classList.remove("close", "hoverable");
});

sidebar.addEventListener("mouseenter", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
  }
});
sidebar.addEventListener("mouseleave", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
  }
});

submenuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.classList.toggle("show_submenu");
    submenuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show_submenu");
      }
    });
  });
});

if (window.innerWidth < 768) {
  sidebar.classList.add("close");
} else {
  sidebar.classList.remove("close");
}

document.addEventListener('DOMContentLoaded', function () {
  const closeButtons = document.querySelectorAll('.close');

  closeButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      const alert = this.parentElement;
      alert.style.display = 'none';
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var profileButton = document.querySelector(".profile");
  var cancelButton = document.querySelector(".button-cancel");
  var profileCard = document.querySelector(".profile-card");

  profileButton.addEventListener("click", function () {
    profileCard.style.display = "block";
  });

  cancelButton.addEventListener("click", function () {
    profileCard.style.display = "none";
  });
});
