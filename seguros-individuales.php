    <?php
        $title = "Seguros Individuales y Empresas | GNT Consulting Seguros y Finanzas";
        include_once "Public/include/head.php";
    ?>
</head>
<body>
    <?php include_once "Public/include/nav.php"; ?>

    <!-- FIANZAS -->
    <section id="sec_fianzas" class="sec_txt">
        <h1 class="tit_primario">Seguros Individuales y Empresas</h1>
    </section>


    <!-- FIANZAS LISTA -->
    <section id="" class="sec_general_txt">
        <div class="container">
            <div class="row row_subtit">
                <div class="col-md-12 text-center">
                    <h2 class="subtit_primero">Ofrecemos los siguientes seguros individuales y para empresas:</h2>
                </div>
            </div>
            <?php
                $i=0;
            ?>
            <div class="row">
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>01</h4>
                                <h3>Gastos Médicos<br> Mayores</h3>
                                <img class="btn_icon_serv--2 my-4" src="Public/images/gnt-gastos-medicos-mayores.svg" alt="GNT" width="100">
                                <p class="px-5">Protege a tu familia y busca un plan que se ajuste a tus necesidades.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>02</h4>
                                <h3>Vida</h3>
                                <img class="btn_icon_serv--2 my-4" src="Public/images/gnt-vida.svg" alt="GNT" width="100">
                                <p class="px-5">Protege a los que más quieres. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>03</h4>
                                <h3>Planes de Ahorro</h3>
                                <img class="btn_icon_serv--2 my-4" src="Public/images/gnt-planes-de-ahorro.svg" alt="GNT" width="100">
                                <p class="px-5">Te ayudamos a personalizar y crear estrategias de ahorro para tus planes de ahorro para retiro, educación, proyectos personales, vivienda, etc. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>04</h4>
                                <h3>Persona Clave</h3>
                                <img class="btn_icon_serv--2 my-4" src="Public/images/gnt-persona.svg" alt="GNT" width="100">
                                <p class="px-5">¿Has pensado qué pasaría si la persona más importante de la empresa no estuviera y el impacto que tendría en tu organización?</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>05</h4>
                                <h3>Seguro de Hogar</h3>
                                <img class="btn_icon_serv--2 my-4" src="Public/images/gnt-seguro-de-hogar.svg" alt="GNT" width="100">
                                <p class="px-5">Protege tu patrimonio.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>06</h4>
                                <h3>Seguros Empresariales</h3>
                                <img class="btn_icon_serv--2 my-4" src="Public/images/gnt-seguro-empresarial.svg" alt="GNT" width="100">
                                <p class="px-5">Otorga beneficios a tus colaboradores de acuerdo a las necesidades de tu empresa así como minimizar o eliminar riesgos financieros en caso de imprevistos.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>07</h4>
                                <h3>Seguro de Mascotas</h3>
                                <img class="btn_icon_serv--2 my-4" src="Public/images/gnt-seguro-mascota.svg" alt="GNT" width="100">
                                <p class="px-5">Protege al consentido de casa.  </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>08</h4>
                                <h3>Seguro de Auto</h3>
                                <img class="btn_icon_serv--2 my-4" src="Public/images/gnt-seguro-auto.svg" alt="GNT" width="150">
                                <p class="px-5">Evita que un accidente se convierta en un desembolso no planeado. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>09</h4>
                                <h3>Seguro de Viaje</h3>
                                <img class="btn_icon_serv--2 my-4" src="Public/images/gnt-seguro-viaje.svg" alt="GNT" width="150">
                                <p class="px-5">Te damos diferentes opciones para que no sea una preocupación tener un evento inesperado en tu viaje. </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- POP UP -->

        <?php
            $n=0;
        ?>
        <div class="modal fade" id="exampleModal_<?php echo ++$n;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Gastos Médicos Mayores</h2>
                        <p>Protege a ti y a tu familia, busca un plan que se ajuste a tus necesidades y que proteja tus finanzas ante un evento inesperado de enfermedad o accidente.</p>
                        <hr>
                        <img class="img-fluid" src="Public/images/gnt-gastos-medicos-mayores.jpg" alt="">
                        <hr>
                        <a href="#" class="btn--modal">¿Quiéres más información? Da click aquí</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal_<?php echo ++$n;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Seguro de Vida</h2>
                        <p>Protege y cuida a tu familia con un respaldo económico en caso de fallecimiento o invalidez. </p>
                        <p>Ten en cuenta que se necesitan de al menos 5 años para que una familia se recupere económicamente tras la pérdida del sostén principal de la familia.</p>
                        <hr>
                        <img class="img-fluid" src="Public/images/vida.jpg" alt="">
                        <hr>
                        <a href="#" class="btn--modal">¿Quiéres más información? Da click aquí</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal_<?php echo ++$n;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Planes de Ahorro</h2>
                        <p>El ahorro es una herramienta fundamental para alcanzar nuestras metas financieras a largo plazo.</p>
                        <p>Existen diferentes plazos de ahorro que van desde los 5 hasta los 20 años. </p>
                        <p>Recuerda que cada persona tiene diferentes objetivos  de ahorro que pueden ir desde el Retiro, Educación, Viaje, Vivienda hasta algún proyecto en específico. </p>
                        <hr>
                        <img class="img-fluid" src="Public/images/Planes-de-Ahorro.jpg" alt="">
                        <hr>
                        <a href="#" class="btn--modal">¿Quiéres más información? Da click aquí</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal_<?php echo ++$n;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Seguro de Persona Clave</h2>
                        <p>¿Puedes identificar quien o quienes son las personas mas valiosas de tu compañía?</p>
                        <p>Contar con este tipo de seguro ayuda a la empresa  a tener un salvavidas financiero y evitar una disminución en la productividad de la empresa.</p>
                        <p>Las principales coberturas son fallecimiento e invalidez. </p>
                        <hr>
                        <img class="img-fluid" src="Public/images/Seguro-de-Persona-Clave.jpg" alt="">
                        <hr>
                        <a href="#" class="btn--modal">¿Quiéres más información? Da click aquí</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal_<?php echo ++$n;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Seguro de Hogar</h2>
                        <p>Protege tu patrimonio que es de los activos más valiosos que tienes y en el cual has invertido mucho tiempo para obtenerlo. </p>
                        <p>Recuerda que en este tipo de seguros no solo proteges tu casa, también los contenidos que hay en ella. </p>
                        <p>Puedes tener beneficios adicionales como protección en caso de fugas de agua, daños a terceros, etc.</p>
                        <hr>
                        <img class="img-fluid" src="Public/images/Seguro-de-Hogar.jpg" alt="">
                        <hr>
                        <a href="#" class="btn--modal">¿Quiéres más información? Da click aquí</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal_<?php echo ++$n;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Seguros para Empresas</h2>
                        <div class="row text-lg-left">
                            <div class="col-12 col-lg-6">
                                <ul>
                                    <li>Seguro de Gastos Médicos </li>
                                    <li>Seguro de Vida </li>
                                    <li>Flotillas</li>
                                    <li>Seguros de Responsabilidad Civil</li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6">
                                <ul>
                                    <li>Seguros Empresariales </li>
                                    <li>Seguros de Persona Clave </li>
                                    <li>Seguros de D&O/E&O</li>
                                    <li>Seguros de RC Profesional</li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <img class="img-fluid" src="Public/images/Seguros-para-Empresas.jpg" class="w-100">
                        <hr>
                        <a href="#" class="btn--modal">¿Quiéres más información? Da click aquí</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal_<?php echo ++$n;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Seguro de Mascotas</h2>
                        <p>¿Sabías que ya puedes asegurar a tu mascota? </p>
                        <p>Pregunta por nuestras coberturas:  </p>

                        <p>
                            Responsabilidad Civil Mascotas <br>
                            Gastos Médicos<br>
                            Robo con violencia mascotas <br>
                            Fallecimiento mascotas 
                        </p>

                        <p>Cuenta con servicios adicionales: desparasitación, Pipeta antipulgas, Esterilización, baño antipulgas, corte de uñas. </p>
                        <hr>
                        <img class="img-fluid" src="Public/images/Seguro-de-Mascotas.jpg" class="w-100">
                        <hr>
                        <a href="#" class="btn--modal">¿Quiéres más información? Da click aquí</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal_<?php echo ++$n;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Seguro de Autos</h2>
                        <p>Evita que un accidente  se convierta en un desembolso no planeado. </p>
                        <p>Revisa nuestras opciones de cobertura que van desde: Responsabilidad Civil, Cobertura Amplia y Limitada con las aseguradoras más reconocidas en el mercado. </p>
                        <hr>
                        <img class="img-fluid" src="Public/images/Seguro-de-autos.jpg" class="w-100">
                        <hr>
                        <a href="#" class="btn--modal">¿Quiéres más información? Da click aquí</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal_<?php echo ++$n;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Seguro de Viaje</h2>
                        <p>Te damos diferentes opciones para que no sea una preocupación tener un evento inesperado en tu viaje.  </p>

                        <p>
                            -Placer (incluye algunos deportes de riesgo: ski, bici de montaña, etc) <br>
                            -Negocios<br>
                            -Estudios<br>
                            -Nacional o Internacional
                        </p>
                        <h>
                        <img class="img-fluid" src="Public/images/Seguro-de-Viaje.jpg" class="w-100">
                        <hr>
                        <a href="#" class="btn--modal">¿Quiéres más información? Da click aquí</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- POP UP -->

    <?php include_once "Public/include/footer.php"; ?>

</body>
</html>