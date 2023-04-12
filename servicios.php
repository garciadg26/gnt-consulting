<?php 
    $title = "Servicios | GNT Consulting Seguros y Finanzas";
    include_once "Public/include/head.php";
?>
</head>
<body>

    <?php include_once "Public/include/nav.php"; ?>

    <section id="sec_servicios" class="sec_encabezado">

    </section>

    <!-- QUIENES SOMOS -->
    <section id="section_serv_btn" class="sec_general">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="tit_primario home__photo1">Servicios</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 offset-md-1 home__photo2">
                    <a class="text_deco_none" href="fianzas.php">
                        <div class="card_blue_serv">
                            <div class="cont_txt_overlay">
                                <img class="btn_icon_serv" src="Public/images/svg/icon_fianzas_serv.svg" alt="">
                                <h4 class="tit_secundario_bn">Fianzas</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5 home__photo3">
                    <a class="text_deco_none" href="seguros-individuales.php">
                        <div class="card_blue_serv">
                            <div class="cont_txt_overlay">
                                <img class="btn_icon_serv" src="Public/images/svg/icon_seguros_serv.svg" alt="">
                                <h4 class="tit_secundario_bn">Seguros Individuales y Empresas</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php include_once "Public/include/footer.php"; ?>

</body>
</html>