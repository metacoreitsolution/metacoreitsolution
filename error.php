


    <?php
$Title = "Oops! Page Not Found | MetaCore Solution";
$MetaDescription = "The page you're looking for doesn't exist. Return to our homepage or explore our services at MetaCore Solution.";
$MetaKeywords = "404 error, page not found, broken link, MetaCore error page";

?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';
?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">404 - Error Page</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home">Home</a></li>
                    <li>404 - Error Page</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="error-img"><img src="assets/img/theme-img/error.svg" alt="404 image"></div>
            <div class="error-content">
                <h2 class="error-title"><span class="text-theme">OooPs!</span> Page Not Found</h2>
                <p class="error-text">Oops! The page you are looking for does not exist. It might have been moved or
                    deleted.</p><a href="home" class="th-btn"><i class="fal fa-home me-2"></i>Back To Home</a>
            </div>
        </div>
    </section>
  <?php
include __DIR__ . '/A_Layout/Footer/footer.php';
?>