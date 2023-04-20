    <ul class="list_idioma">
        <?php 
            $enInicio = 'en/index.php';
            $quienes = 'quienes-somos.php';
            $enAbout = 'en/about-us.php';
            $servicios = 'servicios.php';
            $enServices = 'en/services.php';
            $fianzas = 'fianzas.php';
            $enBonds = 'en/bonds.php';
            $enBonds = 'en/idioma.php';
            $seguros = 'seguros-individuales.php';
            $enInsurance = 'individual-insurance.php';
            $contacto = 'contacto.php';
            $enContact = 'en/contact.php';
            $posInicio = strpos($url_actual, $enInicio);
            $posQuienes = strpos($url_actual, $quienes);
            $posAbout = strpos($url_actual, $enAbout);
            $posServicios = strpos($url_actual, $servicios);
            $posServices = strpos($url_actual, $enServices);
            $posfianzas = strpos($url_actual, $fianzas);
            $posBonds = strpos($url_actual, $enBonds);
            $posSeguros = strpos($url_actual, $seguros);
            $posInsurance = strpos($url_actual, $enInsurance);
            $posContact = strpos($url_actual, $contacto);
            $posContact = strpos($url_actual, $enContact);

            //INDEX
            if($posInicio !== false){
                //echo "Estoy en index inglés";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/index.php">ENG</a></li>';
                // QUIENES SOMOS
            } elseif($posQuienes !== false){
                //echo "Estoy en quienes";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'quienes-somos.php">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/about-us.php">ENG</a></li>';
            } elseif($posAbout !== false){
                //echo "Estoy en about us";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'quienes-somos.php">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/about-us.php">ENG</a></li>';
                // SERVICIOS
            } elseif($posServicios !== false){
                //echo "Estoy en servicios";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'servicios.php">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/services.php">ENG</a></li>';
            } elseif($posServices !== false){
                //echo "Estoy en services";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'servicios.php">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/services.php">ENG</a></li>';
                // FIANZAS
            } elseif($posfianzas !== false){
                //echo "Estoy en Fianzas";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'fianzas.php">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/bonds.php">ENG</a></li>';
            } elseif($posBonds !== false){
                //echo "Estoy en Bonds";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'fianzas.php">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/bonds.php">ENG</a></li>';
            } elseif($posSeguros !== false){
                //echo "Estoy en Seguros Individuales";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'seguros-individuales.php">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/individual-insurance.php">ENG</a></li>';
            } elseif($posInsurance !== false){
                //echo "Estoy en Individual Insurance";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'seguros-individuales.php">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/individual-insurance.php">ENG</a></li>';
            } elseif($posContacto !== false){
                //echo "Estoy en Contacto";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'contacto.php">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/contact.php">ENG</a></li>';
            } elseif($posContact !== false){
                //echo "Estoy en Contact";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'contacto.php">ESP</a></li>';
                //echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/contact.php">ENG</a></li>';
            }
        ?>
    </ul>