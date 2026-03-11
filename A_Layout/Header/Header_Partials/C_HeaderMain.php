<?php
$page = basename($_SERVER['PHP_SELF'] ?? '');
$currentPath = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
$isServicePage = strpos($currentPath, 'services/') === 0;
$isSolutionPage = strpos($currentPath, 'industries/') === 0 || strpos($currentPath, 'technologies/') === 0;
$isCompanyPage = in_array($currentPath, ['case-studies', 'blog', 'locations', 'careers', 'contact-us']) || strpos($currentPath, 'case-studies/') === 0 || strpos($currentPath, 'blog/') === 0 || strpos($currentPath, 'locations/') === 0;
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

    <!-- Mobile Menu -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle" type="button" aria-label="Close menu"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="/">
                    <img src="https://metacortexitsolution.com/assets/img/logo/MetaCortex-It-Solution-Logo.svg" alt="MetaCortex IT Solutions" style="width: 150px;"/>
                </a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="/" class="<?php echo ($page == "index.php" || $currentPath == '') ? 'active' : ''; ?>"><i class="fas fa-home me-2"></i>Home</a></li>
                    <li><a href="/about-us" class="<?php echo ($currentPath == 'about-us') ? 'active' : ''; ?>"><i class="fas fa-info-circle me-2"></i>About</a></li>
                    <li class="menu-item-has-children-custom th-item-has-children">
                        <a href="/services" class="solution-link d-flex justify-content-between align-items-center <?php echo $isServicePage ? 'active' : ''; ?>"><i class="fas fa-cogs me-2"></i>Services <span class="toggle-icon ms-2 th-mean-expand"></span></a>
                        <ul class="sub-menu th-submenu" style="display: none;">
                            <li><a href="/services/mobile-app-development"><i class="fas fa-mobile-alt me-2"></i>Mobile App Development</a></li>
                            <li><a href="/services/web-development"><i class="fas fa-globe me-2"></i>Web Development</a></li>
                            <li><a href="/services/custom-software-development"><i class="fas fa-laptop-code me-2"></i>Custom Software Development</a></li>
                            <li><a href="/services/ai-development-services"><i class="fas fa-robot me-2"></i>AI Development Services</a></li>
                            <li><a href="/services/blockchain-development"><i class="fas fa-link me-2"></i>Blockchain Development</a></li>
                            <li><a href="/services/ar-vr-development"><i class="fas fa-vr-cardboard me-2"></i>AR/VR Development</a></li>
                            <li><a href="/services/ui-ux-design-services"><i class="fas fa-palette me-2"></i>UI/UX Design Services</a></li>
                            <li><a href="/services/saas-development-services"><i class="fas fa-cloud me-2"></i>SaaS Development</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children-custom th-item-has-children">
                        <a href="/industries" class="solution-link d-flex justify-content-between align-items-center <?php echo $isSolutionPage ? 'active' : ''; ?>"><i class="fas fa-industry me-2"></i>Solutions <span class="toggle-icon ms-2 th-mean-expand"></span></a>
                        <ul class="sub-menu th-submenu" style="display: none;">
                            <li class="megamenu-mobile-title">Industries</li>
                            <li><a href="/industries/healthcare-software-development"><i class="fas fa-heartbeat me-2"></i>Healthcare</a></li>
                            <li><a href="/industries/fintech-software-development"><i class="fas fa-university me-2"></i>Fintech</a></li>
                            <li><a href="/industries/real-estate-software-development"><i class="fas fa-building me-2"></i>Real Estate</a></li>
                            <li><a href="/industries/logistics-software-development"><i class="fas fa-truck me-2"></i>Logistics</a></li>
                            <li><a href="/industries/edtech-software-development"><i class="fas fa-graduation-cap me-2"></i>EdTech</a></li>
                            <li class="megamenu-mobile-title">Technologies</li>
                            <li><a href="/technologies/flutter-app-development"><i class="fab fa-android me-2"></i>Flutter</a></li>
                            <li><a href="/technologies/react-native-app-development"><i class="fab fa-react me-2"></i>React Native</a></li>
                            <li><a href="/technologies/nodejs-development"><i class="fab fa-node-js me-2"></i>Node.js</a></li>
                            <li><a href="/technologies/python-development"><i class="fab fa-python me-2"></i>Python</a></li>
                            <li><a href="/technologies/laravel-development"><i class="fab fa-laravel me-2"></i>Laravel</a></li>
                        </ul>
                    </li>
                    <li><a href="/portfolio" class="<?php echo (strpos($currentPath, 'portfolio') === 0) ? 'active' : ''; ?>"><i class="fas fa-briefcase me-2"></i>Projects</a></li>
                    <li class="menu-item-has-children-custom th-item-has-children">
                        <a href="/case-studies" class="solution-link d-flex justify-content-between align-items-center <?php echo $isCompanyPage ? 'active' : ''; ?>"><i class="fas fa-building me-2"></i>Company <span class="toggle-icon ms-2 th-mean-expand"></span></a>
                        <ul class="sub-menu th-submenu" style="display: none;">
                            <li><a href="/case-studies"><i class="fas fa-file-alt me-2"></i>Case Studies</a></li>
                            <li><a href="/blog"><i class="fas fa-blog me-2"></i>Blog</a></li>
                            <li><a href="/locations"><i class="fas fa-map-marker-alt me-2"></i>Locations</a></li>
                            <li><a href="/careers"><i class="fas fa-users me-2"></i>Careers</a></li>
                            <li><a href="/contact-us"><i class="fas fa-envelope me-2"></i>Contact</a></li>
                        </ul>
                    </li>
                    <li class="d-block d-lg-none mt-3"><a href="/contact-us" class="th-btn btn-gradient2 style-radius w-100 text-center header-cta-btn">Get Free Consultation</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Desktop Header - Sticky -->
    <header class="th-header header-layout23 header-absolute" role="banner">
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="/" aria-label="MetaCortex IT Solution - Home">
                                    <img src="./assets/img/logo/MetaCortex-It-Solution-Logo.svg" alt="MetaCortex IT Solution" class="header-logo-img"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu style2 d-none d-lg-inline-block" role="navigation" aria-label="Main navigation">
                                <ul>
                                    <li><a href="/" class="<?php echo ($page == "index.php" || $currentPath == '') ? 'active' : ''; ?>">Home</a></li>
                                    <li><a href="/about-us" class="<?php echo ($currentPath == 'about-us') ? 'active' : ''; ?>">About</a></li>

                                    <!-- Services Dropdown -->
                                    <li class="menu-item-has-children">
                                        <a href="/services" class="<?php echo $isServicePage ? 'active' : ''; ?>">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="/services/mobile-app-development"><i class="fas fa-mobile-alt me-2"></i>Mobile App Development</a></li>
                                            <li><a href="/services/web-development"><i class="fas fa-globe me-2"></i>Web Development</a></li>
                                            <li><a href="/services/custom-software-development"><i class="fas fa-laptop-code me-2"></i>Custom Software Development</a></li>
                                            <li><a href="/services/ai-development-services"><i class="fas fa-robot me-2"></i>AI Development Services</a></li>
                                            <li><a href="/services/blockchain-development"><i class="fas fa-link me-2"></i>Blockchain Development</a></li>
                                            <li><a href="/services/ar-vr-development"><i class="fas fa-vr-cardboard me-2"></i>AR/VR Development</a></li>
                                            <li><a href="/services/ui-ux-design-services"><i class="fas fa-palette me-2"></i>UI/UX Design Services</a></li>
                                            <li><a href="/services/saas-development-services"><i class="fas fa-cloud me-2"></i>SaaS Development</a></li>
                                        </ul>
                                    </li>

                                    <!-- Solutions Mega Menu -->
                                    <li class="menu-item-has-children mega-menu-wrap">
                                        <a href="/industries" class="<?php echo $isSolutionPage ? 'active' : ''; ?>">Solutions</a>
                                        <ul class="mega-menu mega-menu-content">
                                            <li class="megamenu-list">
                                                <a href="/industries" class="mega-menu-title">Industries</a>
                                                <ul>
                                                    <li><a href="/industries/healthcare-software-development"><i class="fas fa-heartbeat me-2"></i>Healthcare Software Development</a></li>
                                                    <li><a href="/industries/fintech-software-development"><i class="fas fa-university me-2"></i>Fintech Software Development</a></li>
                                                    <li><a href="/industries/real-estate-software-development"><i class="fas fa-building me-2"></i>Real Estate Software Development</a></li>
                                                    <li><a href="/industries/logistics-software-development"><i class="fas fa-truck me-2"></i>Logistics Software Development</a></li>
                                                    <li><a href="/industries/edtech-software-development"><i class="fas fa-graduation-cap me-2"></i>EdTech Software Development</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-list">
                                                <a href="/technologies" class="mega-menu-title">Technologies</a>
                                                <ul>
                                                    <li><a href="/technologies/flutter-app-development"><i class="fab fa-android me-2"></i>Flutter Development</a></li>
                                                    <li><a href="/technologies/react-native-app-development"><i class="fab fa-react me-2"></i>React Native Development</a></li>
                                                    <li><a href="/technologies/nodejs-development"><i class="fab fa-node-js me-2"></i>Node.js Development</a></li>
                                                    <li><a href="/technologies/python-development"><i class="fab fa-python me-2"></i>Python Development</a></li>
                                                    <li><a href="/technologies/laravel-development"><i class="fab fa-laravel me-2"></i>Laravel Development</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="/portfolio" class="<?php echo (strpos($currentPath, 'portfolio') === 0) ? 'active' : ''; ?>">Projects</a></li>

                                    <!-- Company Dropdown -->
                                    <li class="menu-item-has-children">
                                        <a href="/case-studies" class="<?php echo $isCompanyPage ? 'active' : ''; ?>">Company</a>
                                        <ul class="sub-menu">
                                            <li><a href="/case-studies"><i class="fas fa-file-alt me-2"></i>Case Studies</a></li>
                                            <li><a href="/blog"><i class="fas fa-blog me-2"></i>Blog</a></li>
                                            <li><a href="/locations"><i class="fas fa-map-marker-alt me-2"></i>Locations</a></li>
                                            <li><a href="/careers"><i class="fas fa-users me-2"></i>Careers</a></li>
                                            <li><a href="/contact-us"><i class="fas fa-envelope me-2"></i>Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="header-button">
                                <a href="/contact-us" class="th-btn btn-gradient2 style-radius header-cta-btn">Get Free Consultation</a>
                            </div>
                            <button type="button" class="th-menu-toggle d-block d-lg-none" aria-label="Open menu"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
