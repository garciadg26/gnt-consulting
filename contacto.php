    <?php
        $title = "Quienes somos | GNT Consulting Seguros y Finanzas";
        include_once "Public/include/head.php";
    ?>
    <!-- ICONS -->
    <link rel="stylesheet" href="Public/css/ionicons.min.css">
</head>
<body>

    <?php include_once "Public/include/nav.php"; ?>

    <section id="sec_contacto" class="sec_encabezado">

    </section>

    <!-- contacto -->
    <section id="section_descript" class="sec_general">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="tit_primario home__photo1">Contacto</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- form -->
    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-6 azul home__photo1">
                    <p>Déjanos un mensaje y pronto nos comunicarémos contigo.</p>
                    <form id="formulario" method="post" action="">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <!-- Grupo: Nombre -->
                                <div class="formulario__grupo" id="grupo__nombreINP">
                                    <div class="formulario__grupo-input">
                                        <label class="formulario__label" for="nombreINP">Nombre*</label>
                                        <input type="text" class="input" name="nombreINP" id="nombreINP">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El nombre solo puede contener letras.</p>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <!-- Grupo: Teléfono -->
                                <div class="formulario__grupo" id="grupo__telefonoINP">
                                    <div class="formulario__grupo-input">
                                        <label class="formulario__label" for="telefonoINP">Teléfono*</label>
                                        <input type="tel" class="input" name="telefonoINP" id="telefonoINP">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 12 dígitos.</p>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <!-- Grupo: Correo Electronico -->
                                <div class="formulario__grupo" id="grupo__emailINP">
                                    <div class="formulario__grupo-input">
                                        <label class="formulario__label" for="emailINP">Email*</label>
                                        <input type="email" class="input" name="emailINP" id="emailINP">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 12 dígitos.</p>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <label>Comentarios</label>
                                <textarea class="input" name="msn" id="msn" cols="30" rows="7"></textarea>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="formulario__mensaje" id="formulario__mensaje">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor llena el formulario correctamente. </p>
                                </div>
                                <input type="submit" value="Enviar">
                                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-4 home__photo1" id="info_contacto">
                    <h5 class="azul">Email</h5>
                    <a class="h5 azul" href="mailto:contacto@gntconsulting.mx">contacto@gntconsulting.mx</a>
                    <hr style="opacity: 1; background: #121766">
                    <h5 class="azul">Oficina</h5>
                    <a href="tel:+525513237777" class="azul item_contacto">+52 (551) 323 7777</a><br>
                    <h5 class="azul">Teléfonos</h5>
                    <a href="tel:+525513237777" class="azul item_contacto">+52 (552) 561 5449</a><br>
                    <a href="tel:+525513237777" class="azul item_contacto">+52 (552) 299 9771</a>
                    <hr style="opacity: 1; background: #121766">
                    <h5 class="azul">Redes Sociales</h5>
                    <a href="https://www.instagram.com/gnt_consulting/?igshid=ODM2MWFjZDg%3D" target="_blank"><img src="Public/images/gnt---instagram.svg" width="40"></a>
                    <a href="" target="_blank"><img src="Public/images/gnt---facebook.svg" width="40"></a>
                    <a href="https://www.linkedin.com/company/gntconsulting/?original_referer=http%3A%2F%2Flocalhost%3A8080%2F" target="_blank"><img src="Public/images/gnt---linkedin.svg" width="40"></a>
                </div>
            </div>
        </div>
    </section>

    <?php include_once "Public/include/footer.php"; ?>

    <script type="" src="Public/js/form_contacto.js?ver=1.1.11"></script>
</body>
</html>