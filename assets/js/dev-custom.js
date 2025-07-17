document.querySelectorAll('.menu-item-has-children-custom > a').forEach(link => {
    link.addEventListener('click', function (e) {
      // Force redirect
      window.location.href = this.getAttribute('href');
    });
  });