<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Contacts</title>

    <!--Favicon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="assets/css/line-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="assets/css/fontAwesomePro.css" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- Bar Filler CSS -->
    <link href="assets/css/barfiller.css" rel="stylesheet">
    <!-- Magnific Popup Video -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Nice Select  -->
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <!-- Back to Top -->
    <link href="assets/css/backToTop.css" rel="stylesheet">
    <!-- Metis Menu -->
    <link href="assets/css/metismenu.css" rel="stylesheet">
    <!-- Odometer CSS -->
    <link href="assets/css/odometer.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
</head>

<body>



    <!-- Header Area  -->
    <?php include_once "partials/_header.php"; ?>
    <!-- Breadcrumb Area  -->

    <div class="breadcrumb-area bread-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="breadcrumb-title">
                        <h1>Contacts</h1>
                    </div>
                    <div class="breadcrumb-icon">
                        <i class="las la-angle-down"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Map Start-->
    <div class="contact-page google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3658.5180050769495!2d58.2143171149769!3d23.513864384706494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDMwJzQ5LjkiTiA1OMKwMTInNTkuNCJF!5e0!3m2!1sen!2som!4v1685884988370!5m2!1sen!2som"  width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Contact Info -->

    <div class="contact-info-wrapper section-padding pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <img src="assets/img/contact/1.png" alt="">
                        </div>
                        <p><?php echo ADDRESS; ?></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <img src="assets/img/contact/2.png" alt="">
                        </div>
                        <p><?php echo EMAIL; ?></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <img src="assets/img/contact/3.png" alt="">
                        </div>
                        <p><?php echo PH_NUMBER; ?></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <img src="assets/img/contact/4.png" alt="" style="filter: invert(100%)">
                        </div>
                        <p><?php echo WHATSAPP_NUMBER; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Footer Area -->
    <?php include_once "partials/_footer.php"; ?>

    <div class="offcanvas-overlay"></div>

    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Wow JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Way Points JS -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- Counter Up JS -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Isotope JS -->
    <script src="assets/js/isotope-3.0.6-min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Back To Top JS -->
    <script src="assets/js/backToTop.js"></script>
    <!-- Metis Menu JS -->
    <script src="assets/js/metismenu.js"></script>
    <!-- Progress Bar JS -->
    <script src="assets/js/jquery.barfiller.js"></script>
    <!-- Appear JS -->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!-- Odometer JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- Zoom Js -->
    <script src="assets/js/jquery.zoom.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>