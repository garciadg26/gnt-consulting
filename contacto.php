    <?php
        $title = "Quienes somos | GNT Consulting Seguros y Finanzas";
        include_once "Public/include/head.php";
    ?>
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
                    <form action="">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <h5>Nombre*</h5>
                                <input type="text" class="input" name="" id="">
                            </div>
                            <div class="col-12 mb-4">
                                <h5>Email*</h5>
                                <input type="email" class="input" name="" id="">
                            </div>
                            <div class="col-12 mb-4">
                                <h5>Comentarios</h5>
                                <textarea class="input" name="" id="" cols="30" rows="7"></textarea>
                            </div>
                            <div class="col-12 mb-4">
                                <input type="submit" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-4 home__photo1">
                    <h5 class="azul">Email</h5>
                    <a class="h5 azul" href="mailto:contacto@gntconsulting.mx">contacto@gntconsulting.mx</a>
                    <hr style="opacity: 1; background: #121766">
                    <h5 class="azul">Oficina</h5>
                    <h5 class="azul">+52 (55) 1323 7777</h5>
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


</body>
</html>