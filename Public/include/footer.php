    <!-- FOOTER -->
    <footer id="foot" class="footer_gen">
        <div class="cont_foot">
            <div class="row">
                <!-- INICIO -->
                <?php 
                    if($posEn === false)
                    { // ESPAÑOL
                ?>
                <div class="col-lg-6 col-md-5 col-sm-12 d-flex align-items-center">
                    <img class="logo_footer" src="<?php echo constant('URL'); ?>Public/images/svg/logo-gnt.svg" alt="">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <h4 class="tit_footer">Más sobre GNT</h4>
                    <a class="link_footer" href="preguntas-frecuentes.php">Preguntas frecuentes</a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 colContacto">
                    <h4 class="tit_footer">Contacto</h4>
                    <a class="link_footer" href="mailto:gntconsulting.mx">contacto@gntconsulting.mx</a><br><br>
                    <h4 class="tit_footer">Oficina</h4>
                    <a class="link_footer" href="tel:+525525615449">+52 (552) 561 5449</a><br>
                    <a class="link_footer" href="tel:+525522999771">+52 (552) 299 9771</a><br><br>
                    <h4 class="tit_footer">Redes Sociales</h4>
                    <a class="link_footer" href="https://instagram.com/gnt_consulting?igshid=ODM2MWFjZDg=" target="_blank">Instagram</a><br>
                    <a class="link_footer" href="#" target="_blank">Facebook</a><br>
                    <a class="link_footer" href="https://www.linkedin.com/company/gntconsulting/" target="_blank">LinkedIn</a>
                </div>
                <?php
                    } else{ // INGLÉS
                ?>  
                    <div class="col-lg-6 col-md-5 col-sm-12 d-flex align-items-center">
                        <img class="logo_footer" src="<?php echo constant('URL'); ?>Public/images/svg/logo-gnt.svg" alt="">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <h4 class="tit_footer">More about GNT</h4>
                        <a class="link_footer" href="faqs.php">Frequent questions</a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 colContacto">
                        <h4 class="tit_footer">Contact</h4>
                        <a class="link_footer" href="mailto:gntconsulting.mx">contacto@gntconsulting.mx</a><br><br>
                        <h4 class="tit_footer">office</h4>
                        <a class="link_footer" href="tel:+525525615449">+52 (552) 561 5449</a><br>
                        <a class="link_footer" href="tel:+525522999771">+52 (552) 299 9771</a><br><br>
                        <h4 class="tit_footer">Social Media</h4>
                        <a class="link_footer" href="https://instagram.com/gnt_consulting?igshid=ODM2MWFjZDg=" target="_blank">Instagram</a><br>
                        <a class="link_footer" href="#" target="_blank">Facebook</a><br>
                        <a class="link_footer" href="https://www.linkedin.com/company/gntconsulting/" target="_blank">LinkedIn</a>
                    </div>
                <?php 
                    }
                ?>
                <!-- FIN -->
            </div>
            <div class="row legales">
                <div class="col-md-6">
                    <h6 class="txt_legales">© 2023 GNT Consulting / <span>Derechos Reservados</span></h6>
                </div>
                <div class="col-md-6 col_aviso_privacidad">
                    <a class="link_footer" href="#">Aviso de privacidad</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- BOOTSTRAP -->
    <script tyoe="text/javascript" src="<?php echo constant('URL'); ?>Public/js/bootstrap.min.js"></script>

    <!-- SCROLL REVEAL -->
    <script type="text/javascript" src="<?php echo constant('URL'); ?>Public/js/scrollReveal.min.js"></script>
    
    <!-- MAIN -->
    <script type="text/javascript" src="<?php echo constant('URL'); ?>Public/js/main.js?ver=1.1.33"></script>
    
