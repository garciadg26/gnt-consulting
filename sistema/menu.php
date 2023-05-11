<?php session_start();
if(!$_SESSION["logued"])
		header('Location:index.php');
		error_reporting(0);

error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA ADMINISTRADOR</title>
<link href="css/sistema.css?ver=1.1.15" rel="stylesheet" type="text/css" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="imagenes/favicon.png">



<!--FANCYBOX-->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox({
			//afterClose: function () { parent.location.reload(true); }
		});

	});
	/*$(".ejemplo_4").fancybox({
	"autoScale" : false,
	"transitionIn" : "none",
	"transitionOut" : "none",
	"width" : 500,
	"height" : 400,
	"type" : "iframe",
	afterClose: function () { parent.location.reload(true); }

	});*/
	/*function cantidad_menos(venta,producto){
		alert(venta);
	}*/
	// function cantidad_mas(venta,producto){
	// 	$.ajax({
	// 		type: 'POST',
	// 		url: 'sumar.php',
	// 		data: { id: venta , prod: producto },
	// 		// Mostramos un mensaje con la respuesta de PHP
	// 		success: function(data) {
	// 		$('#bloque_listado_1').css('display','none');
	// 		$('#bloque_listado_2').css('display','block');
	// 		$('#bloque_listado_2').html(data);
	// 		$('#bloque_listado_2').focus();
	// 		}
	// 	});
	// }

	function mostrar(id){
		$('#btn'+id).css('display','none');
		$('#btnb'+id).css('display','block');
		$('#preguntas'+id).css('display','block');
		$('#preguntas'+id).html(data);
		$('#preguntas'+id).focus();
	}
	function ocultar(id){
		$('#btnb'+id).css('display','none');
		$('#btn'+id).css('display','block');
		$('#preguntas'+id).css('display','none');
	}


</script>
<!--FIN DEL BLOQUE-->

</head>
<body style="margin:0; background-color:#ECF7FD; background-position:fixed center; background-size:cover;">
<?php
	include "include/funciones.php";
    include "../Public/include/conectar.php";
	$usuario=$_SESSION['usuario'];
?>
<div id="wrapper">
	<div id="izquierda" style="position:fixed;">
		<div id="logo">
            <img src="../Public/images/svg/logo-gnt-vectores.svg" />
        </div>
        <div class="clearer"></div>
        <div id="menu" style="height:100%;">
        	<ul style="height:65%; overflow-y:scroll;">
            	<?php
					switch($tipo_usuario){
						default:
							@$opcion=$_GET['opcion'];
							if($opcion==NULL){
								echo '<li style="padding:15px 10%; text-align:left; font-size:14px; background-color:#121766; color:#CCC;"><img src="imagenes/home_blanco.svg"><br>Inicio</li>';
								} else {
									echo '<li><a href="menu.php"><img src="imagenes/home.svg"><br>Inicio</a></li>';
							}
							if($opcion=="slide"){
								echo '<li style="padding:15px 10%; text-align:left; font-size:14px; background-color:#121766; color:#CCC;"><img src="imagenes/slide_blanco.png"><br>Slide</li>';
								} else {
									echo '<li><a href="menu.php?opcion=slide"><img src="imagenes/slide.png"><br>Slide</a></li>';
							}
							/*if($opcion=="slide_proyectos"){
								echo '<li style="padding:15px 10%; text-align:left; font-size:14px; background-color:#121766; color:#CCC;"><img src="imagenes/slide_blanco.png"><br>Slide proyectos</li>';
								} else {
									echo '<li><a href="menu.php?opcion=slide_proyectos"><img src="imagenes/slide.png"><br>Slide proyectos</a></li>';
							}*/
							// if($opcion=="proyectos"){
							// 	echo '<li style="padding:15px 10%; text-align:left; font-size:14px; background-color:#121766; color:#CCC;"><img src="imagenes/icons-27.svg"><br>Proyectos</li>';
							// 	} else {
							// 		echo '<li><a href="menu.php?opcion=proyectos"><img src="imagenes/icons-23.svg" ><br>Proyectos</a></li>';
							// }
							if($opcion=="alianzas"){
								echo '<li style="padding:15px 10%; text-align:left; font-size:14px; background-color:#121766; color:#CCC;"><img src="imagenes/icons-26.svg"><br>Logos alianzas</li>';
								} else {
									echo '<li><a href="menu.php?opcion=alianzas"><img src="imagenes/icons-22.svg"><br>Logos alianzas</a></li>';
							}
							if($opcion=="clientes"){
								echo '<li style="padding:15px 10%; text-align:left; font-size:14px; background-color:#121766; color:#CCC;"><img src="imagenes/icons-26.svg"><br>Logos clientes</li>';
								} else {
									echo '<li><a href="menu.php?opcion=clientes"><img src="imagenes/icons-22.svg"><br>Logos clientes</a></li>';
							}
							// if($opcion=="prensa"){
							// 	echo '<li style="padding:15px 10%; text-align:left; font-size:14px; background-color:#121766; color:#CCC;"><img src="imagenes/icons-25.svg"><br>Prensa</li>';
							// } else {
							// 		echo '<li><a href="menu.php?opcion=prensa"><img src="imagenes/icons-21.svg"><br>Prensa</a></li>';
							// }
							// if($opcion=="personal"){
							// 	echo '<li style="padding:15px 10%; text-align:left; font-size:14px; background-color:#121766; color:#CCC;"><img src="imagenes/icons-28.svg"><br>Personal</li>';
							// } else {
							// 	echo '<li><a href="menu.php?opcion=personal"><img src="imagenes/icons-24.svg"><br>Personal</a></li>';
							// }

						break;
					}
				?>
            </ul>
        </div>
        <div class="clearer"></div>
        <div id="datos">
        	<!-- <div id="cambiar"><a href="cambiar_pwd.php?flag=si" class="fancybox fancybox.iframe"><img src="imagenes/i_engrane.png" /></a></div> -->
            <div id="usuario"><?php echo $usuario; ?></div>
            <div id="salir"><a href="salir.php" class="fancybox fancybox.iframe"><img src="imagenes/cerrar.png"/></a></div>
        </div>

	</div>
    <div id="derecha" style="left:15%; position:absolute;">
    	<?php
        	@$opcion=$_GET['opcion'];
			switch($opcion){
				case "inicio": 
					include "include/home.php";
					break;
				case "alianzas": 
					include "include/alianzas.php";
				 	break;
				case "slide": 
					include "include/slide.php"; 
					break;
				case "clientes": 
					include "include/clientes.php";
					break;
				default: include 'include/inicio.php'; break;
			}
		?>
    </div>
</div>
</body>
</html>
