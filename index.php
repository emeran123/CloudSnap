<?php

include 'lang.php';
// style="direction: <?php echo $lang['direction'] 
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['lang_code'] ?>" dir="<?php echo $lang['direction'] ?>">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title> <?php echo $lang['PAGE_TITLE']; ?> </title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="logo/cloud-final.png" type="image/x-icon" />
<!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style-rtl.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>



</head>

<body>




    <!-- Start header -->
    <?php include 'sections/header.php'; ?>
    <!-- End header -->



    <!-- ======= Hero Section ======= -->
    <?php include 'sections/hero.php'; ?>
    <!-- End Hero -->



    <!-- About us section -->
    <?php include 'sections/about-us.php'; ?>
    <!-- End about us -->




    <!-- Start our services -->
    <?php include 'sections/our-services.php'; ?>
    <!-- end our services -->


    <!-- Start importance website  -->
    <?php include 'sections/importance-of-website.php'; ?>
    <!-- end importance website  -->


    <!-- Start importance mobile apps -->
    <?php include 'sections/importance-of-mobile-app.php'; ?>
    <!-- end importance mobile apps -->



    <!-- Start our work -->
    <?php
    // include 'sections/our-work.php';
    ?>
    <!-- end our work -->




    <!-- Start footer section -->

    <?php include 'sections/footer.php'; ?>
    <!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">
                        <?php echo $lang['COPY_RIGHT_ALL_RIGHT_RESERVED'] ?>
                        &copy; 2022 <span style="font-weight: bold;
                           color: #21cdbf;"> <?php echo $lang['COPY_RIGHT_COMPANY_NAME'] ?> </span>
                    </p>
                </div>


            </div>
        </div><!-- end container -->
    </div>

    <!-- end copyrights -->

    <!-- <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a> -->

    <!-- <a href="https://api.whatsapp.com/send?phone=967773030069&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a> -->


    <div class="elfsight-app-4a2f6733-9322-448a-92e3-982da4dff63a"></div>

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/js/main.js"></script>



</body>

</html>