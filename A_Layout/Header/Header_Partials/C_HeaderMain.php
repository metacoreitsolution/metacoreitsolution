<?php
$page = basename($_SERVER['PHP_SELF']);
$currentPath = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
$isServicePage = preg_match('#^(router\.php|service\.php|ios-android-app-development|webdevelopment|uxdesign|custom-software-development|crossPlatformAppDevelopment|ai-ml-development|blockchain-development|ar-vr-development)#', $page) || strpos($currentPath, 'services/') === 0 || strpos($currentPath, 'technologies/') === 0;
$isIndustryPage = strpos($currentPath, 'industries/') === 0;
?>
<body class="theme2">

   <div id="preloader" class="preloader">
    <div id="loader" class="th-preloader">
        <div class="animation-preloader">
            <img src="https://metacortexitsolution.com/assets/img/logo/MetaCortex-It-Solution-Logo.svg" alt="Logo" class="preloader-logo" />
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
            <p class="loading-text">Loading...</p>
        </div>
    </div>
</div>

    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
  <a href="home">
    <img src="https://metacortexitsolution.com/assets/img/logo/MetaCortex-It-Solution-Logo.svg" 
         alt="MetaCortex IT Solutions Logo" style="width: 150px;"/>
  </a>
</div>

            <div class="th-mobile-menu">
                <ul>
                    <li><a href="home" class="<?php echo ($page == "index.php" || $currentPath == '') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about-us" class="<?php echo ($currentPath == 'about-us') ? 'active' : ''; ?>">About Us</a></li>

                    <li class="menu-item-has-children-custom first-menu-in-desktop">
                        <a href="services" class="solution-link d-flex justify-content-between align-items-center <?php echo $isServicePage ? 'active' : ''; ?>">
                            Services
                            <span class="toggle-icon ms-2"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="services/mobile-app-development">Mobile App Development</a></li>
                            <li><a href="services/web-development">Web Development</a></li>
                            <li><a href="services/custom-software-development">Custom Software Development</a></li>
                            <li><a href="services/ai-development-services">AI Development Services</a></li>
                            <li><a href="services/blockchain-development">Blockchain Development</a></li>
                            <li><a href="services/ar-vr-development">AR/VR Development</a></li>
                            <li><a href="services/ui-ux-design-services">UI/UX Design Services</a></li>
                            <li><a href="services/enterprise-software-development">Enterprise Software Development</a></li>
                            <li><a href="services/saas-development-services">SaaS Development Services</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children-custom th-item-has-children">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="technologies" class="solution-link">Technologies</a>
                            <span class="toggle-icon ms-2 th-mean-expand"></span>
                        </div>
                        <ul class="sub-menu th-submenu" style="display: none;">
                            <li><a href="technologies/flutter-app-development">Flutter App Development</a></li>
                            <li><a href="technologies/react-native-app-development">React Native App Development</a></li>
                            <li><a href="technologies/nodejs-development">Node.js Development</a></li>
                            <li><a href="technologies/python-development">Python Development</a></li>
                            <li><a href="technologies/laravel-development">Laravel Development</a></li>
                            <li><a href="technologies/reactjs-development">React.js Development</a></li>
                        </ul>
                    </li>

                    <li><a href="portfolio" class="<?php echo (strpos($currentPath, 'portfolio') === 0) ? 'active' : ''; ?>">Portfolio</a></li>

                    <li class="menu-item-has-children-custom first-menu-in-desktop">
                        <a href="industries" class="solution-link d-flex justify-content-between align-items-center <?php echo $isIndustryPage ? 'active' : ''; ?>">
                            Industries
                            <span class="toggle-icon ms-2"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="industries/healthcare-software-development">Healthcare Software Development</a></li>
                            <li><a href="industries/real-estate-software-development">Real Estate Software Development</a></li>
                            <li><a href="industries/fintech-software-development">Fintech Software Development</a></li>
                            <li><a href="industries/logistics-software-development">Logistics Software Development</a></li>
                            <li><a href="industries/edtech-software-development">EdTech Software Development</a></li>
                            <li><a href="industries/ecommerce-software-development">Ecommerce Software Development</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children-custom th-item-has-children">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="industries" class="solution-link">Industries</a>
                            <span class="toggle-icon ms-2 th-mean-expand"></span>
                        </div>
                        <ul class="sub-menu th-submenu" style="display: none;">
                            <li><a href="industries/healthcare-software-development">Healthcare Software Development</a></li>
                            <li><a href="industries/real-estate-software-development">Real Estate Software Development</a></li>
                            <li><a href="industries/fintech-software-development">Fintech Software Development</a></li>
                            <li><a href="industries/logistics-software-development">Logistics Software Development</a></li>
                            <li><a href="industries/edtech-software-development">EdTech Software Development</a></li>
                            <li><a href="industries/ecommerce-software-development">Ecommerce Software Development</a></li>
                        </ul>
                    </li>

                    <li><a href="hire-developers">Hire Developers</a></li>
                    <li><a href="case-studies">Case Studies</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="locations">Locations</a></li>
                    <li><a href="careers">Careers</a></li>
                    <li class="d-block d-md-none"><a href="contact-us">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="th-header header-layout23 header-absolute">
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo"><a href="home"><img src="./assets/img/logo/MetaCortex-It-Solution-Logo.svg" alt="MetaCortex" class="w-50"></a></div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu style2 d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="home" class="<?php echo ($page == "index.php" || $currentPath == '') ? 'active' : ''; ?>">Home</a></li>
                                    <li><a href="about-us" class="<?php echo ($currentPath == 'about-us') ? 'active' : ''; ?>">About Us</a></li>
                                    <li class="menu-item-has-children-custom">
                                        <a href="services" class="solution-link d-flex justify-content-between align-items-center <?php echo $isServicePage ? 'active' : ''; ?>">
                                            Services
                                            <span class="toggle-icon ms-2"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="services/mobile-app-development">Mobile App Development</a></li>
                                            <li><a href="services/web-development">Web Development</a></li>
                                            <li><a href="services/custom-software-development">Custom Software Development</a></li>
                                            <li><a href="services/ai-development-services">AI Development Services</a></li>
                                            <li><a href="services/blockchain-development">Blockchain Development</a></li>
                                            <li><a href="services/ar-vr-development">AR/VR Development</a></li>
                                            <li><a href="services/ui-ux-design-services">UI/UX Design Services</a></li>
                                            <li><a href="services/enterprise-software-development">Enterprise Software Development</a></li>
                                            <li><a href="services/saas-development-services">SaaS Development Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children-custom">
                                        <a href="technologies" class="solution-link d-flex justify-content-between align-items-center <?php echo (strpos($currentPath, 'technologies') === 0) ? 'active' : ''; ?>">
                                            Technologies
                                            <span class="toggle-icon ms-2"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="technologies/flutter-app-development">Flutter App Development</a></li>
                                            <li><a href="technologies/react-native-app-development">React Native App Development</a></li>
                                            <li><a href="technologies/nodejs-development">Node.js Development</a></li>
                                            <li><a href="technologies/python-development">Python Development</a></li>
                                            <li><a href="technologies/laravel-development">Laravel Development</a></li>
                                            <li><a href="technologies/reactjs-development">React.js Development</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio" class="<?php echo (strpos($currentPath, 'portfolio') === 0) ? 'active' : ''; ?>">Portfolio</a></li>
                                    <li class="menu-item-has-children-custom">
                                        <a href="industries" class="solution-link d-flex justify-content-between align-items-center <?php echo $isIndustryPage ? 'active' : ''; ?>">
                                            Industries
                                            <span class="toggle-icon ms-2"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="industries/healthcare-software-development">Healthcare Software Development</a></li>
                                            <li><a href="industries/real-estate-software-development">Real Estate Software Development</a></li>
                                            <li><a href="industries/fintech-software-development">Fintech Software Development</a></li>
                                            <li><a href="industries/logistics-software-development">Logistics Software Development</a></li>
                                            <li><a href="industries/edtech-software-development">EdTech Software Development</a></li>
                                            <li><a href="industries/ecommerce-software-development">Ecommerce Software Development</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="hire-developers">Hire Developers</a></li>
                                    <li><a href="case-studies">Case Studies</a></li>
                                    <li><a href="blog">Blog</a></li>
                                    <li><a href="locations">Locations</a></li>
                                    <li><a href="careers">Careers</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="header-button"><a href="contact-us" class="th-btn btn-gradient2 style-radius <?php echo ($currentPath == 'contact-us') ? 'active' : ''; ?>">Contact</a></div>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
