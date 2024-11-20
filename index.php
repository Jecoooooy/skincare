<?php
    require_once './config/database.php';
    include 'include/head.php';
    include 'include/navigationBar.php';
    // include 'include/header-wrapper.php';
?>
<main>
    <?php include 'include/home.php'?>

    <?php include 'include/congrats.php'?>
    <?php include 'include/about.php' ?>
    <?php include 'include/influence.php' ?>
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 d-flex align-items-center justify-content-md-center justify-content-lg-start">
                    <div style="max-width:500px;">
                        <h2 class="fs-1 text-center text-md-center text-lg-start">WOULD YOU LIKE TO LEARN MORE?</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 d-flex align-items-center justify-content-center">
                    <div style="max-width:300px;">
                        <?php include 'include/button.php'?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="w-100 bg-primary ">
    <div class="container ">
        <div class="row" style="min-height:100px;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 text-center align-content-center m-auto" >
                <p class="text-white">Copyright © 2022    |    LOGO</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6" >
                <ul class="d-flex justify-content-evenly align-items-center h-100">
                    <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Terms & Condition</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none">FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php include 'include/registerDialog.php' ?>
<?php include 'include/script.php' ?>