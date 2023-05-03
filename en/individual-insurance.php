<?php
        include_once "../Public/include/head.php";
    ?>
</head>
<body>
    <?php include_once "../Public/include/nav.php" ?>
    

    <!-- FIANZAS -->
    <section id="sec_fianzas" class="sec_txt">
        <h1 class="tit_primario">Individual and Group Insurance</h1>
    </section>


    <!-- FIANZAS LISTA -->
    <section id="" class="sec_general_txt">
        <div class="container">
            <div class="row row_subtit">
                <div class="col-md-12 text-center">
                    <h2 class="subtit_primero">We offer the following individual and group insurance:</h2>
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
                                <h3>Major Medical Insurance</h3>
                                <img class="btn_icon_serv--2 my-4" src="../Public/images/gnt-gastos-medicos-mayores.svg" alt="GNT" width="100">
                                <p class="px-5">Protect your family and find a plan that adjusts to your needs.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>02</h4>
                                <h3>Life Insurance</h3>
                                <img class="btn_icon_serv--2 my-4" src="../Public/images/gnt-vida.svg" alt="GNT" width="100">
                                <p class="px-5">Protect those who are most important to you.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>03</h4>
                                <h3>Saving Plans</h3>
                                <img class="btn_icon_serv--2 my-4" src="../Public/images/gnt-planes-de-ahorro.svg" alt="GNT" width="100">
                                <p class="px-5">We help you to customize and create savings strategies for your savings plans of retirement, education, personal projects, housing, etc. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>04</h4>
                                <h3>Key Person Insurance</h3>
                                <img class="btn_icon_serv--2 my-4" src="../Public/images/gnt-persona.svg" alt="GNT" width="100">
                                <p class="px-5">While all employees contribute to the success of a small or medium sized business in some way, there are those employees that just can´t be replaced</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>05</h4>
                                <h3>Home Insurance</h3>
                                <img class="btn_icon_serv--2 my-4" src="../Public/images/gnt-seguro-de-hogar.svg" alt="GNT" width="100">
                                <p class="px-5">Protect what is most important to you.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>06</h4>
                                <h3>Group Insurance</h3>
                                <img class="btn_icon_serv--2 my-4" src="../Public/images/gnt-seguro-empresarial.svg" alt="GNT" width="100">
                                <p class="px-5">Provide benefits to your employees depending on the needs of your company as well as minimizing and/or eliminating financial risk in the case of unforeseen events.  </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>07</h4>
                                <h3>Pet Insurance</h3>
                                <img class="btn_icon_serv--2 my-4" src="../Public/images/gnt-seguro-mascota.svg" alt="GNT" width="100">
                                <p class="px-5">Protect the most beloved member of the family.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>08</h4>
                                <h3>Car Insurance</h3>
                                <img class="btn_icon_serv--2 my-4" src="../Public/images/gnt-seguro-auto.svg" alt="GNT" width="150">
                                <p class="px-5">Prevent an accident from becoming an additional unplanned expense. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 hidden anima_delay50">
                    <a class="text_deco_none blanco" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal_<?php echo ++$i;?>">
                        <div class="card_blue_serv card_blue_serv--2">
                            <div class="cont_txt_overlay">
                                <h4>09</h4>
                                <h3>Travel Insurance</h3>
                                <img class="btn_icon_serv--2 my-4" src="../Public/images/gnt-seguro-viaje.svg" alt="GNT" width="150">
                                <p class="px-5">We give you options so that you don’t end up having any unexpected expenses while on your trip. </p>
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
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Major Medical Insurance</h2>
                        <p>Protect you and your family and look for a plan that meets your needs and that protects your finances in the event of an unexpected illness or accident.</p>
                        <hr>
                        <img class="img-fluid" src="../Public/images/gnt-gastos-medicos-mayores.jpg" alt="">
                        <hr>
                        <a href="contact.php" class="btn--modal">Do you want more information? Click here</a>
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
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Life Insurance </h2>
                        <p>Protect and take care of your family with the peace of mind of knowing that you have financial support in the case of death or disability.</p>
                        <p>Please make sure to take into account that it takes at least 5 years for a family to recover financially after the loss of the main economic provider. </p>
                        <hr>
                        <img class="img-fluid" src="../Public/images/vida.jpg" alt="">
                        <hr>
                        <a href="contact.php" class="btn--modal">Do you want more information? Click here</a>
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
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Savings plans</h2>
                        <p>Have you thought about your savings plan goals 5, 10, 15 or 20 years from now?</p>
                        <p>If you start saving with a life insurance policy now, you will be able to anticipate and organize the goals that you have for your future.</p>
                        <p>Remember that everyone has different objectives: home, higher education for your children and/or grandchildren, retirement, and travel.</p>
                        <hr>
                        <img class="img-fluid" src="../Public/images/Planes-de-Ahorro.jpg" alt="">
                        <hr>
                        <a href="contact.php" class="btn--modal">Do you want more information? Click here</a>
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
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Key Person Insurance</h2>
                        <p>Can you identify which employees are the most valuable in your company?</p>
                        <p>Key Person Insurance can help provide a financial lifeline for your business when suffering from the loss of an important employee.</p>
                        <p>The following options for coverage are available:</p>
                        <p>Death <br>
                            Disability <br>
                            Retirement Plan</p>
                        <hr>
                        <img class="img-fluid" src="../Public/images/Seguro-de-Persona-Clave.jpg" alt="">
                        <hr>
                        <a href="contact.php" class="btn--modal">Do you want more information? Click here</a>
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
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Homeowners Insurance</h2>
                        <p>Protect your most valuable assets that you have invested a lot of time to obtain. </p>
                        <p>Remember that this type of insurance will not only protect your home but also the contents within it as well. </p>
                        <p>We also offer additional benefits such as protection in case of water leaks, damage to third parties as well as others.</p>
                        <hr>
                        <img class="img-fluid" src="../Public/images/Seguro-de-Hogar.jpg" alt="">
                        <hr>
                        <a href="contact.php" class="btn--modal">Do you want more information? Click here</a>
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
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Group Insurance</h2>
                        <div class="row text-lg-left">
                            <div class="col-12 col-lg-6">
                                <ul>
                                    <li>Medical Insurance </li>
                                    <li>Life Insurance </li>
                                    <li>Fleet Insurance </li>
                                    <li>Casualty and Liability Insurance </li>
                                    <li>Key Person Insurance </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6">
                                <ul>
                                    <li>Property Insurance </li>
                                    <li>Credit Insurance </li>
                                    <li>D&O Insurance </li>
                                    <li>E&O Insurance </li>
                                    <li>Crime Insurance </li>
                                    <li>Cyber Insurance </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <img class="img-fluid" src="../Public/images/Seguros-para-Empresas.jpg" class="w-100">
                        <hr>
                        <a href="contact.php" class="btn--modal">Do you want more information? Click here</a>
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
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Pet Insurance</h2>
                        <p>Did you know that you can now insure your pet? </p>
                        <p>Ask about our coverage:  </p>

                        <p>
                            Liability of Pets <br>
                            Medical Expenses<br>
                            Aggravated Robbery of Pets<br>
                            The Death of a Pet 
                        </p>

                        <p>With additional services such as: deworming, flea treatment, sterilization, flea bath, and nail trims.</p>
                        <hr>
                        <img class="img-fluid" src="../Public/images/Seguro-de-Mascotas.jpg" class="w-100">
                        <hr>
                        <a href="contact.php" class="btn--modal">Do you want more information? Click here</a>
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
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Car Insurance:</h2>
                        <p>Prevent an accident from becoming an unplanned additional expense.</p>
                        <p>Take a look at our coverage options that range from: Civil Liability and Broad and Limited Coverage with the most recognized insurers in the market. </p>
                        <hr>
                        <img class="img-fluid" src="../Public/images/Seguro-de-autos.jpg" class="w-100">
                        <hr>
                        <a href="contact.php" class="btn--modal">Do you want more information? Click here</a>
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
                        <h2 class="modal-title azul pb-4" id="exampleModalLabel">Travel Insurance :</h2>
                        <p>We give you  options so that you don’t end up having any unexpected expenses while on your trip.</p>

                        <p>
                            -Leisure (recreation) including  adventure sports like: skiing,  mountain biking, snowboard and more)<br>
                            -Businesses<br>
                            -Student Travel<br>
                            -National and International
                        </p>
                        <h>
                        <img class="img-fluid" src="../Public/images/Seguro-de-Viaje.jpg" class="w-100">
                        <hr>
                        <a href="contact.php" class="btn--modal">Do you want more information? Click here</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- POP UP -->

    <?php include_once "../Public/include/footer.php"; ?>

</body>
</html>