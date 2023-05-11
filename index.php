
    <?php
        $title = "GNT Consulting Seguros y Finanzas";
        include_once 'Public/include/head.php';
        include_once 'Public/include/conectar.php';
    ?>
</head>
<body>
    <div id="home_dark">
        <?php include_once "Public/include/nav.php"; ?>
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
                    <div class="slider-item slider-item<?php echo ++$n ?> js-fullheight" style="background-image:url('Public/images/<?php echo $datos2['imagen'] ?>');">
                        <div class="row no-gutters slider-text js-fullheight align-items-end">
                            <div class="col-md-12 ftco-animate">
                                <div class="cont_text w-100">
                                    <span class="tit_slider animated fadeInDown" style="animation-delay:.2s;"><?php echo $datos2['titulo'] ?></span>
                                    <!-- La mejor manera <br> de predecir el futuro <br> es creándolo  -->
                                    <!-- <h3 class="author_slider animated fadeInUp" style="animation-delay:.6s;">- Peter Drucker</h3><br> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            }
        ?>
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
                    <h2 class="tit_secundario home__photo1">¿Quiénes somos?</h2>
                    <p class="subtit w-830 home__photo2">Empresa con una amplia trayectoria en el sector asegurador y afianzador, que cuenta con una sólida experiencia en la consultoría, administración y colocación de riesgo para personas y empresas.</p>
                </div>
            </div>
        </div>
        <!-- <div class="extra_img"></div> -->
    </section>

    <!-- PARALLAX -->
    <section id="sec_parallex_01" class="sec_general paralex">
        <div class="background" style="
  background: url('Public/images/gnt-banner-quienes-somos.jpg');
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
                    <h1 class="tit_carrucel text-center">PRINCIPALES ALIANZAS</h1>
                    <div class="item_img">
                        <?php 
                            $datos=mysqli_query($conexion, "SELECT * from gnt_alianzas where visible='si' order by id_alianzas asc");
                            if(mysqli_num_rows($datos)>0){
                                while($datos2=mysqli_fetch_array($datos)){
                                    ?>
                                        <img class="" src="Public/images/svg/<?php echo $datos2['imagen'] ?>" alt="">
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="item">
                    <h1 class="tit_carrucel text-center">NUESTROS CLIENTES</h1>
                    <div class="item_img2">
                        <?php 
                            $datos=mysqli_query($conexion, "SELECT * from gnt_clientes where visible='si' order by id_clientes asc");
                            if(mysqli_num_rows($datos)>0){
                                while($datos2=mysqli_fetch_array($datos)){
                                    ?>
                                        <img src="Public/images/svg/<?php echo $datos2['imagen']?>" alt="">
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

    <?php include_once "Public/include/footer.php"; ?>

    <script tyoe="text/javascript" src="Public/js/owl.carousel.min.js"></script>
    <script tyoe="text/javascript" src="Public/js/carrucel.js"></script>
    <script tyoe="text/javascript" src="Public/js/slider.js?ver=1.1.11"></script>

    <script type="text/javascript" src="Public/js/parallex.js"></script>

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

