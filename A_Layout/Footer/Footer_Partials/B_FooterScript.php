<?php
echo
'
    <!-- Fix relative asset paths for inner pages (data-bg-src, data-mask-src) -->
    <script>
    (function(){
      function fixAttr(attr){
        try {
          document.querySelectorAll("["+attr+"]").forEach(function(el){
            var v=el.getAttribute(attr);
            if(v&&v.charAt(0)!=="/"&&v.indexOf("http")!==0){el.setAttribute(attr,"/"+v);}
          });
        }catch(e){}
      }
      fixAttr("data-bg-src");fixAttr("data-mask-src");
    })();
    </script>
    <script src="/assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/circle-progress.js"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/tilt.jquery.min.js"></script>
    <script src="/assets/js/ScrollTrigger.min.js"></script>
    <script src="/assets/js/smooth-scroll.js"></script>
    <script src="/assets/js/particles.min.js"></script>
    <script src="/assets/js/particles-config.js"></script>
    <script src="/assets/js/imageRevealHover.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/dev-custom.js"></script>
    <script src="/assets/js/whatsapp.js"></script>
    <script src="/assets/js/loader.js"></script>
    <script src="/assets/js/Contact-mail.js"></script>

</body>

</html>
'
  ?>