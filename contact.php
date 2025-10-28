<?php
$Title = "Contact MetaCore Solution | Get in Touch with Our Experts";
$MetaDescription = "Have questions or need support? Contact MetaCore Solution today to discuss your IT, software, or digital project requirements.";
$MetaKeywords = "Contact MetaCore, get in touch, request a quote, IT support, software consultation, connect with us";

?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';
?>
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="home">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<div class="space" id="contact-sec">
    <div class="container">
        <div class="row gy-4">
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon"><i class="fas fa-location-dot"></i></div>
                    <div class="media-body">
                        <h4 class="box-title">Office Address</h4><span class="contact-info_text">Ahmedabad, Gujarat, India </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon"><i class="fas fa-phone"></i></div>
                    <div class="media-body"> 
                        <h4 class="box-title">Call Us Anytime</h4><span class="contact-info_text"><a
                                href="tel:+919265738337">+91 9104902707</a> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon"><i class="fas fa-envelope"></i></div>
                    <div class="media-body">
                        <h4 class="box-title">Send An Email</h4><span class="contact-info_text"><a
                                href="mailto:info@metacoreitsolution.com">info@metacoreitsolution.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-smoke space" data-bg-src="assets/img/bg/contact_bg_1.png" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="title-area mb-35 text-xl-start text-center"><span class="sub-title">
                        <div class="icon-masking me-2"><span class="mask-icon"
                                data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img
                                src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>contact with us!
                    </span>
                    <h2 class="sec-title">Have Any Questions?</h2>
                    <p class="sec-text">Enthusiastically disintermediate one-to-one leadership via business
                        e-commerce. Dramatically reintermediate compelling process improvements rather than
                        empowered relationships.</p>
                </div>
                <form id="contact-Inquiry-form" class="contact-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" id="firstName" class="form-control" name="name" id="name"
                                placeholder="Your Name"> <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" id="email" class="form-control" name="email" id="email"
                                placeholder="Email Address"> <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="subject" id="subject" class="form-select">
                                <option value="" disabled="disabled" selected="selected" hidden="">Select Subject
                                </option>
                                <option value="Web Development">Web Development</option>
                                <option value="Brand Marketing">Brand Marketing</option>
                                <option value="UI/UX Designing">UI/UX Designing</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                            </select> <i class="fal fa-chevron-down"></i></div>
                        <div class="form-group col-md-6"><input  id="phone" type="tel" class="form-control" name="number"
                                id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i></div>
                        <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                class="form-control" placeholder="Your Message"></textarea> <i
                                class="fal fa-comment"></i></div>
                        <div class="form-btn text-xl-start text-center col-12">
                            <button class="th-btn" type="submit" id="submit-button">Send Message
                                <i class="fa-regular fa-arrow-right ms-2"></i>
                                 <span class="form-btn-loader d-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 200 100">
                                       <circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="40" cy="50">
                                          <animate attributename="opacity" calcmode="spline" dur="2" values="1;0;1;" keysplines=".5 0 .5 1;.5 0 .5 1" repeatcount="indefinite" begin="-.4"></animate>
                                       </circle>
                                       <circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="100" cy="50">
                                          <animate attributename="opacity" calcmode="spline" dur="2" values="1;0;1;" keysplines=".5 0 .5 1;.5 0 .5 1" repeatcount="indefinite" begin="-.2"></animate>
                                       </circle>
                                       <circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="160" cy="50">
                                          <animate attributename="opacity" calcmode="spline" dur="2" values="1;0;1;" keysplines=".5 0 .5 1;.5 0 .5 1" repeatcount="indefinite" begin="0"></animate>
                                       </circle>
                                    </svg>
                                 </span>
                            </button>
                        </div>
                        
                    </div>
                    <!-- <p class="form-messages mb-0 mt-3"></p> -->
                     <div id="toast" class="custom-toast">
                                <div class="toast-content">
                                  <span class="toast-icon">✓</span>
                                  <div class="toast-message">Message here</div>
                                  <button class="toast-close" onclick="hideToast()">&times;</button>
                                </div>
                                <div class="toast-progress"></div>
                              </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="map-sec">
    <iframe 
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.555888529703!2d72.57136241534561!3d23.022505784943525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84f5cfaa8f67%3A0xa5a37d0d1b5e9df3!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1695485289269!5m2!1sen!2sin" 
  width="100%" 
  height="400" 
  style="border:0;" 
  allowfullscreen="" 
  loading="lazy" 
  referrerpolicy="no-referrer-when-downgrade">
</iframe>


</div>
<?php
include __DIR__ . '/A_Layout/Footer/footer.php';
?>