    <ul class="list_idioma">
        <?php 
            //INDEX
            if($posInicio !== false){
                //echo "Estoy en index inglés";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/index.php">ENG</a></li>';
            } 
            elseif(strcmp($url_actual, $raiz) === 0){
                // echo "Estoy en index normal";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/index.php">ENG</a></li>';
                // QUIENES SOMOS
            } 
            elseif($posIni !== false){
                // echo "Estoy en index normal";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/index.php">ENG</a></li>';
                // QUIENES SOMOS
            }
             elseif($posQuienes !== false){
                //echo "Estoy en quienes";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'quienes-somos.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/about-us.php">ENG</a></li>';
            } elseif($posAbout !== false){
                //echo "Estoy en about us";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'quienes-somos.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/about-us.php">ENG</a></li>';
                // SERVICIOS
            } elseif($posServicios !== false){
                //echo "Estoy en servicios";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'servicios.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/services.php">ENG</a></li>';
            } elseif($posServices !== false){
                //echo "Estoy en services";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'servicios.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/services.php">ENG</a></li>';
                // FIANZAS
            } elseif($posfianzas !== false){
                //echo "Estoy en Fianzas";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'fianzas.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/bonds.php">ENG</a></li>';
            } elseif($posBonds !== false){
                //echo "Estoy en Bonds";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'fianzas.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/bonds.php">ENG</a></li>';
            } elseif($posSeguros !== false){
                //echo "Estoy en Seguros Individuales";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'seguros-individuales.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/individual-insurance.php">ENG</a></li>';
            } elseif($posInsurance !== false){
                //echo "Estoy en Individual Insurance";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'seguros-individuales.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/individual-insurance.php">ENG</a></li>';
            } elseif($posContacto !== false){
                //echo "Estoy en Contacto";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'contacto.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/contact.php">ENG</a></li>';
            } elseif($posContact !== false){
                //echo "Estoy en Contact";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'contacto.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/contact.php">ENG</a></li>';
            } elseif($posPreguntas !== false){
                //echo "Estoy en Contact";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'preguntas-frecuentes.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/faqs.php">ENG</a></li>';
            } elseif($enFaqs !== false){
                //echo "Estoy en Contact";
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'preguntas-frecuentes.php">ESP</a></li>';
                echo '<li class="item_idioma"><a href="'. constant(('URL')) .'en/faqs.php">ENG</a></li>';
            }
        ?>
    </ul>