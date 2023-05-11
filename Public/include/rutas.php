<?php 

    // $raiz = '/gnt-consulting/'; //cambiar variable
    $raiz = '/'; //cambiar variable
    // $raiz = '/test/gnt/'; //cambiar variable
    $Ini = '/index.php';
    $enInicio = 'en/index.php';
    $quienes = 'quienes-somos.php';
    $enAbout = 'en/about-us.php';
    $servicios = 'servicios.php';
    $enServices = 'en/services.php';
    $fianzas = 'fianzas.php';
    $enBonds = 'en/bonds.php';
    // $enBonds = 'en/idioma.php';
    $seguros = 'seguros-individuales.php';
    $enInsurance = 'individual-insurance.php';
    $contacto = 'contacto.php';
    $enContact = 'en/contact.php';
    $preguntas = 'preguntas-frecuentes.php';
    $enFaqs = 'en/faqs.php';
    $posRaiz = strpos($url_actual, $raiz);
    $posIni = strpos($url_actual, $Ini);
    $posInicio = strpos($url_actual, $enInicio);
    $posQuienes = strpos($url_actual, $quienes);
    $posAbout = strpos($url_actual, $enAbout);
    $posServicios = strpos($url_actual, $servicios);
    $posServices = strpos($url_actual, $enServices);
    $posfianzas = strpos($url_actual, $fianzas);
    $posBonds = strpos($url_actual, $enBonds);
    $posSeguros = strpos($url_actual, $seguros);
    $posInsurance = strpos($url_actual, $enInsurance);
    $posContacto = strpos($url_actual, $contacto);
    $posContact = strpos($url_actual, $enContact);
    $posPreguntas = strpos($url_actual, $preguntas);
    $enFaqs = strpos($url_actual, $enFaqs);
?>