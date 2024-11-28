<?php
    require_once './config/database.php';
    include 'include/head.php';
    include 'include/navigationBar.php';
?>
<main>
    <div id="screenTop"></div>
    <div id="screenBottom"></div>
    <?php include 'include/home.php'?>
    <?php include 'include/congrats.php'?>
    <?php include 'include/about.php' ?>
    <?php include 'include/influence.php' ?>
    <?php include 'include/banner.php' ?>
    <?php include 'include/footer.php' ?>
    <div id="notification"></div>
</main>
<?php include 'include/registerDialog.php' ?>
<?php include 'include/script.php' ?>