<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $url_actual = $_SERVER['REQUEST_URI'];
        $en = 'en/';
        $posEn = strpos($url_actual, $en);
        if($posEn === false){
            include_once('config/config.php');
            include_once('Public/include/rutas.php');
            // echo "[español - head]";
        } else{
            include_once('../config/config.php');
            include_once('../Public/include/rutas.php');
            // echo "[inglés - head]";
        }
    ?>
    <?php $description = "Empresa con amplia trayectoria en el sector asegurador y afianzador, cuenta con una sólida experiencia en la consultoria y colocación de riesgo"; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="title" content="<?php echo $title; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="seguros, gnt consulting, gnt, seguro de coche, seguro de vida, seguro de viaje, seguro de empresas, seguro de hogar, seguro de ahorro" />
    <meta http-equiv="content-language" content="es_MX" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="http://gntconsulting.mx/" />
    <link rel="alternate" hreflang="es" href="http://gntconsulting.mx/" />
    <meta name="author" content="tipos libres" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:image" content="https://gntconsulting.mx/Public/images/gnt-consulting-cover-compartir.jpg" />
    <meta property="og:url" content="http://gntconsulting.mx/">
    <meta property="og:type" content="article">
    <meta property="og:description" content="<?php echo $description; ?>">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo constant('URL') ?>Public/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo constant('URL') ?>Public/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo constant('URL') ?>Public/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo constant('URL') ?>Public/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo constant('URL') ?>Public/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo constant('URL') ?>Public/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo constant('URL') ?>Public/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo constant('URL') ?>Public/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo constant('URL') ?>Public/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo constant('URL') ?>Public/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo constant('URL') ?>Public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo constant('URL') ?>Public/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo constant('URL') ?>Public/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo constant('URL') ?>Public/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo constant('URL') ?>Public/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?php echo constant('URL') ?>Public/css/bootstrap.min.css?ver=1.1.10">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>Public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>Public/css/style.css?ver=1.1.33">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>Public/css/animate.css">
    
