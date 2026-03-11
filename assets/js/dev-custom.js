// Sticky header - trigger at 100px (override main.js 500px for better UX)
(function() {
  var lastScroll = 0;
  function onScroll() {
    var top = window.pageYOffset || document.documentElement.scrollTop;
    if (top > 100) {
      document.querySelectorAll('.sticky-wrapper').forEach(function(el) { el.classList.add('sticky'); });
    } else {
      document.querySelectorAll('.sticky-wrapper').forEach(function(el) { el.classList.remove('sticky'); });
    }
    lastScroll = top;
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // Run once on load
})();

// Mobile menu: prevent link navigation when clicking toggle icon (theme's thmobilemenu handles toggle)
document.querySelectorAll(".toggle-icon, .th-mean-expand").forEach(function(icon) {
  icon.addEventListener("click", function(e) {
    e.preventDefault();
    e.stopPropagation();
  });
});
