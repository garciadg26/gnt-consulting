<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $url_actual = $_SERVER['REQUEST_URI'];
        $en = 'en/';
        $posEn = strpos($url_actual, $en);
        if($posEn === false){
            include_once('config/config.php');
            // echo "[español - head]";
        } else{
            include_once('../config/config.php');
            // echo "[inglés - head]";
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title; ?></title>

    <link rel="stylesheet" href="<?php echo constant('URL') ?>Public/css/bootstrap.min.css?ver=1.1.10">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>Public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>Public/css/style.css?ver=1.1.25">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>Public/css/animate.css">