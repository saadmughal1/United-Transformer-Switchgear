<?php include_once "config.php"; ?>

<?php
$currentPath = $_SERVER["REQUEST_URI"];
$pageName = basename($currentPath);
$pages  = array("about", "contact", "fabrication-work", "future-insights", "gallery", "tap-changers", "transformer-maintenance");

?>

<div class="header-area absolute-header">
    <div id="header-sticky">
        <div class="navigation">
            <div class="container">
                <div class="header-inner-box">

                    <div class="logo">
                        <a class="navbar-brand" href="./"><img src="assets/img/logo.png" alt=""></a>
                    </div>

                    <div class="main-menu d-none d-lg-block">
                        <ul>
                            <li class="<?php if (!in_array($pageName, $pages)) echo "active"; ?>"><a class="navlink" href="./">Home</a></li>
                            <li class="<?php if ($pageName == "about") echo "active"; ?>"><a class="navlink" href="about">About</a></li>
                            <li class="<?php if ($pageName == "future-insights") echo "active"; ?>"><a class="navlink" href="future-insights">Future Insights</a></li>
                            <li class="<?php if ($pageName == "contact") echo "active"; ?>"><a class="navlink" href="contact">Contact</a></li>
                            <li class="<?php if ($pageName == "gallery") echo "active"; ?>"><a class="navlink" href="gallery">Gallery</a></li>
                        </ul>
                    </div>

                    <div class="header-right">
                        <div class="social-area d-none d-md-block">
                            <a href=""><i class="lab la-facebook-f"></i></a>
                            <a href=""><i class="lab la-instagram"></i></a>
                            <a href=""><i class="lab la-whatsapp"></i></a>
                        </div>
                    </div>

                    <div class="mobile-nav-bar d-block col-sm-1 col-6 d-lg-none">
                        <div class="mobile-nav-wrap">
                            <div id="hamburger">
                                <i class="las la-bars"></i>
                            </div>
                            <!-- mobile menu - responsive menu  -->
                            <div class="mobile-nav">
                                <button type="button" class="close-nav">
                                    <i class="las la-times-circle"></i>
                                </button>
                                <nav class="sidebar-nav">
                                    <ul class="metismenu" id="mobile-menu">
                                        <li class="active"><a class="navlink" href="./">Home</a></li>
                                        <li><a class="navlink" href="about">About</a></li>
                                        <li><a class="navlink" href="future-insights">Future Insights</a></li>
                                        <li><a class="navlink" href="contact">Contact</a></li>
                                        <li><a class="navlink" href="gallery">Gallery</a></li>
                                    </ul>
                                </nav>
                                <div class="action-bar">
                                    <a href="mailto:info@factorix.com"><i class="las la-envelope"></i><?php echo EMAIL; ?></a>
                                    <a href="tel:123-456-7890"><i class="fal fa-phone"></i><?php echo PH_NUMBER; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>