document.querySelectorAll('.menu-item-has-children-custom > a').forEach(link => {
    link.addEventListener('click', function (e) {
      // Force redirect
      window.location.href = this.getAttribute('href');
    });
  });

  document.querySelectorAll(".toggle-icon").forEach(function(icon) {
    icon.addEventListener("click", function(e) {
        e.preventDefault();
        let submenu = this.closest("li").querySelector(".sub-menu");
        submenu.classList.toggle("open");
    });
});
