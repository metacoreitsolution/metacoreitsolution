<?php
/**
 * Page template for new pages - include this with $pageTitle, $pageDescription, $pageKeywords, $breadcrumbParent, $breadcrumbParentUrl set
 */
if (empty($pageTitle)) $pageTitle = 'Page';
if (empty($pageDescription)) $pageDescription = 'MetaCortex IT Solution delivers innovative software and mobile app solutions.';
if (empty($pageKeywords)) $pageKeywords = 'MetaCortex, IT solutions, software development';
if (!isset($breadcrumbParent)) { $breadcrumbParent = 'Home'; $breadcrumbParentUrl = 'home'; }
if (!isset($breadcrumbParentUrl)) $breadcrumbParentUrl = 'home';

$Title = $pageTitle . ' | MetaCortex IT Solution';
$MetaDescription = $pageDescription;
$MetaKeywords = $pageKeywords;
if (!empty($CanonicalPath)) {
    // Already set by router
} else {
    $CanonicalPath = $_SERVER['REQUEST_URI'] ?? '/';
}

include __DIR__ . '/../A_Layout/Header/header.php';
?>
<section class="breadcumb-wrapper py-5" style="background-color: #def4ff;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <nav class="d-flex align-items-center mb-3">
          <ul class="breadcumb-menu list-unstyled d-flex align-items-center mb-0">
            <li><a href="home" class="text-decoration-none text-dark fw-semibold">Home</a></li>
            <?php if ($breadcrumbParent): ?>
            <li><a href="<?php echo htmlspecialchars($breadcrumbParentUrl); ?>" class="text-decoration-none text-dark fw-semibold"><?php echo htmlspecialchars($breadcrumbParent); ?></a></li>
            <?php endif; ?>
            <li class="text-primary fw-semibold"><?php echo htmlspecialchars($pageTitle); ?></li>
          </ul>
        </nav>
        <h1 class="breadcumb-title fw-bold mb-3 text-primary"><?php echo htmlspecialchars($pageTitle); ?></h1>
        <p class="text-dark mb-0"><?php echo htmlspecialchars($pageDescription); ?></p>
      </div>
      <div class="col-md-6 text-center">
        <img src="assets/img/hero/services.png" alt="<?php echo htmlspecialchars($pageTitle); ?>" class="img-fluid" style="max-width: 450px;">
      </div>
    </div>
  </div>
</section>
<div class="space">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="page-content">
          <p><?php echo nl2br(htmlspecialchars($pageContent ?? $pageDescription)); ?></p>
          <?php if (!empty($pageContentExtra)): ?>
          <?php echo $pageContentExtra; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include __DIR__ . '/../A_Layout/Footer/footer.php'; ?>
