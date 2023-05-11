    <?php
        $title = "GNT Consulting Seguros y Finanzas";
        include_once "../Public/include/head.php";
        include_once '../Public/include/conectar.php';
    ?>
</head>
<body>
    <div id="home_dark">
        <?php include_once "../Public/include/nav.php" ?>
    </div>
    
    <!-- SLIDER -->
    <div class="home-slider owl-carousel js-fullheight">
        <?php 
            $datos=mysqli_query($conexion, "SELECT * from gnt_slide where visible='si' order by id_slide asc");
            if(mysqli_num_rows($datos)>0){
                $n=0;
                //RECORREMOS EL ARRAY
                while($datos2=mysqli_fetch_array($datos)){
                    $sql = "SELECT MIN(id_slide) as minimo from gnt_slide where visible='si'";
                    $result = mysqli_query($conexion, $sql);
                    @$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                    @$minimo=$row['minimo'];
                ?>
                    <div class="slider-item js-fullheight" style="background-image:url('../Public/images/<?php echo $datos2['imagen'] ?>');">
                        <div class="row no-gutters slider-text js-fullheight align-items-end">
                            <div class="col-md-12 ftco-animate">
                                <div class="cont_text w-100">
                                    <span class="tit_slider animated fadeInDown" style="animation-delay:.2s;"><?php echo $datos2['titulo_eng'] ?></span>
                                    <!-- <h1 class="tit_slider animated fadeInDown" style="animation-delay:.2s;">The best way <br> to predict the future <br> is to create it. </h1>
                                    <h3 class="author_slider animated fadeInUp" style="animation-delay:.6s;">- Peter Drucker</h3><br> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            }
        ?>



        <!-- ITEM 01 -->
        <!-- <div class="slider-item js-fullheight slider-item01">
            <div class="row no-gutters slider-text js-fullheight align-items-end">
                <div class="col-md-12 ftco-animate">
                    <div class="cont_text w-100">
                        <h1 class="tit_slider animated fadeInDown" style="animation-delay:.2s;">The best way <br> to predict the future <br> is to create it. </h1>
                        <h3 class="author_slider animated fadeInUp" style="animation-delay:.6s;">- Peter Drucker</h3><br>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- ITEM 02 -->
        <!-- <div class="slider-item js-fullheight slider-item02">
            <div class="row slider-text js-fullheight align-items-end">
                <div class="col-md-12 ftco-animate">
                    <div class="cont_text w-100">
                        <h1 class="tit_slider animated fadeInRight">The best way <br> to predict the future <br> is to create it. </h1>
                        <h3 class="author_slider">- Peter Drucker</h3><br>
                    </div>
                </div>
            </div>
        </div> -->
    </div><!-- FIN SLIDER -->

    <!-- SCROLL REVEAL -->
    <a href="#somos" id="icon_scroll" class="btn_scroll">
        <svg class="arrows">
            <path class="a1" d="M10 0 L30 22 L50 0"></path>
            <path class="a2" d="M10 16 L30 38 L50 16"></path>
            <path class="a3" d="M10 32 L30 54 L50 32"></path>
        </svg>
    </a>
  
    <!-- QUIENES SOMOS -->
    <div id="somos"></div>
    <section id="section_quienes_somos" class="sec_somos">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="tit_secundario home__photo1">Who we are...</h2>
                    <p class="subtit w-830 home__photo2">Company with an expansive trajectory in the insurance and bonding sector with solid experience in consulting, management and risk management for individuals and businesses.</p>
                </div>
            </div>
        </div>
        <!-- <div class="extra_img"></div> -->
    </section>

    <!-- PARALLAX -->
    <section id="sec_parallex_01" class="sec_general paralex">
        <div class="background" style="
  background: url('../Public/images/gnt-banner-quienes-somos.jpg');
  background-position-x: 50%;
  background-position-y: 50%;
  opacity: 1;">
        </div>
        <div class="foreground"></div>
    </section>

    <!-- PRINCIPALES ALIANZA -->
    <section id="slider_logos" class="">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 offset-sm-0 cont_testimonial">
            <div class="logos-carousel owl-carousel owl-theme">
                <div class="item">
                    <h1 class="tit_carrucel text-center">MAJOR ALLIANCES</h1>
                    <div class="item_img">
                        <?php 
                            $datos=mysqli_query($conexion, "SELECT * from gnt_alianzas where visible='si' order by id_alianzas asc");
                            if(mysqli_num_rows($datos)>0){
                                while($datos2=mysqli_fetch_array($datos)){
                                    ?>
                                        <img class="" src="../Public/images/svg/<?php echo $datos2['imagen'] ?>" alt="">
                                    <?php
                                }
                            }
                        ?>
                        <!-- <img class="" src="Public/images/svg/logo-gmx-seguros.svg" alt="logo MX Seguros">    
                        <img class="" src="Public/images/svg/logo-gnp-seguros.svg" alt="logo GNT Seguros">
                        <img class="" src="Public/images/svg/logo-liberty-seguros.svg" alt="logo Liberty Seguros">
                        <img class="" src="Public/images/svg/logo-axa-seguros.svg" alt="Seguros Axa">
                        <img class="" src="Public/images/svg/logo-metlife-seguros.svg" alt="Seguros Metlife">
                        <img class="" src="Public/images/svg/logo-sofimex.svg" alt="Seguros Sofimex">
                        <img class="" src="Public/images/svg/logo-mapfre.svg" alt="Logo Mapfre">
                        <img class="" src="Public/images/svg/logo-bupa.svg" alt="Logo Bupa">
                        <img class="" src="Public/images/svg/logo-aserta.svg" alt="Logo Aserta">
                        <img class="" src="Public/images/svg/Logo-seguros-atlas.svg" alt="Logo Seguro Atlas">
                        <img class="" src="Public/images/svg/logo-chubb.svg" alt="Logo Chubb">
                        <img class="" src="Public/images/svg/logo-qualitas.svg" alt="Logo Qualitas"> -->
                    </div>
                </div>
                <div class="item">
                    <h1 class="tit_carrucel text-center">OUR CLIENTS</h1>
                    <div class="item_img2">
                        <?php 
                            $datos=mysqli_query($conexion, "SELECT * from gnt_clientes where visible='si' order by id_clientes asc");
                            if(mysqli_num_rows($datos)>0){
                                while($datos2=mysqli_fetch_array($datos)){
                                    ?>
                                        <img src="../Public/images/svg/<?php echo $datos2['imagen']?>" alt="">
                                    <?php
                                }
                            }
                        ?>
                        <!-- <img src="Public/images/svg/logo-dentalia-s.svg" alt="logo dentalia">    
                        <img src="Public/images/svg/logo-diebold-s.svg" alt="logo GNT Seguros">
                        <img src="Public/images/logo-petstart-p.png" alt="logo Liberty petstart">
                        <img src="Public/images/svg/logo-iberia-s.svg" alt="logo iberia">
                        <img src="Public/images/logo-mp-marketing-group-p.png" alt="Logo cp marketing group">
                        <img src="Public/images/logo-educacion-para-compartir.jpg" alt="Educación para compartir">
                        <img src="Public/images/logo-atxk.jpg" alt="Logo atxk">
                        <img src="Public/images/svg/logo-demant-s.svg" alt="Logo Demant">
                        <img src="Public/images/svg/logo-securitas-s.svg" alt="Logo securitas">
                        <img src="Public/images/logo-tbt-p.png" alt="Logo tbt">
                        <img src="Public/images/svg/logo-lsc-conmmunications-s.svg" alt="Logo lsc communications">
                        <img src="Public/images/logo-linko-p.png" alt="Logo linko">
                        <img src="Public/images/logo-praxis.jpg" alt="Logo praxis">
                        <img src="Public/images/Logo-mas-manny-aviations-services.jpg" alt="Logo mas manny aviations services">
                        <img src="Public/images/svg/logo-lufthansa-s.svg" alt="Logo lufthansa">
                        <img src="Public/images/logo-lapi-laboratorio-medico-p.png" alt="Logo lapi laboratorio médico">
                        <img src="Public/images/logo-tgc.jpg" alt="Logo tgc"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once "../Public/include/footer.php"; ?>

    <script tyoe="text/javascript" src="<?php echo constant('URL') ?>Public/js/owl.carousel.min.js"></script>
    <script tyoe="text/javascript" src="<?php echo constant('URL') ?>Public/js/carrucel.js"></script>
    <script tyoe="text/javascript" src="<?php echo constant('URL') ?>Public/js/slider.js"></script>

    <script type="text/javascript" src="<?php echo constant('URL') ?>Public/js/parallex.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            scrollHome();
        });
        function scrollHome(){
            const header = document.getElementById("home_dark");
            if(this.scrollY >= 20){
                header.classList.remove('logo-svg');
            } else{
                header.classList.add('logo-svg');
            }
        }
        window.addEventListener('scroll', scrollHome);
    </script>

</body>
</html>
