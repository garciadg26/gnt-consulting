<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>GNT Consulting</title>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
	background:#FFF;
}

#mensaje{
	width:90%;
	padding:30px 5%;
	text-align:center;
	font-size:17px;
	color:#666;
	min-height:270px;
}

.texto_esp{
	width:85%;
	padding:15px 5%;
	border:none;
	border-radius:15px;
	background:#DDD;
	border:solid 1px #999;
	color:#333;
	font-size:12px;
}
.texto_eng{
	width:85%;
	padding:15px 5%;
	border:none;
	border-radius:15px;
	background:#d4e6f1;
	border:solid 1px #369;
	color:#333;
	font-size:12px;
}
.texto2{
	width:90%;
	height:150px;
	padding:15px 5%;
	border:none;
	border-radius:10px;
	background:rgba(255,255,255,0.3);
	color:#666;
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
}
.combo{
	width:30%;
	padding:15px 5%;
	border:none;
	border-radius:15px;
	background:#333;
	color:#FFF;
	font-size:12px;
	-webkit-appearance: none;
}
.enviar{
	width:100%;
	padding:15px 5%;
	border:none;
	border-radius:15px;
	background:#333;
	color:#FFF;
	font-size:13px;
	cursor:pointer;
	text-transform:uppercase;
}
.clearer{
	clear:both;
	display:block;
}
span{
	font-size: 12px;
	color: #999;
	width: 100%;
	text-align: center;
}
#titulo{
	width: 100%;
	padding: 10px 0 20px 0;
	text-align: center;
	font-size: 14px;
	color:#666;
	text-transform: uppercase;
}
</style>
</head>
<body>
<div style="width:100%; padding:10px 0; display:table;">
	<div style="width:25%; height:auto; min-height:200px; padding:30px 5%; float:left;">
        <img style="width:100%;" src="../../Public/images/svg/logo-gnt-vectores.svg" />
    </div>
    <div style="width:62%; padding:30px 1%; min-height:200px; margin-left:1px; float:left; background:rgba(51,51,51,0.1); border-left:solid 2px #333;">
    	<?php
			include '../../Public/include/conectar.php';
        	@$bandera=$_POST['bandera'];
					@$slide=$_GET['slide'];
					if($bandera==1){
						$fecha=date("Y-m-d");

						$archivo = $_FILES['imagen']['name'];
						if ($archivo != NULL){
								$archTemp = $_FILES['imagen']['tmp_name'];
								$folder = "../../Public/images/$archivo";
								@copy ($archTemp,$folder);
						}

				mysqli_query($conexion, "insert into gnt_alianzas (imagen, fecha, visible) values('$archivo', '$fecha', 'si')");
				echo '<div id="mensaje">Información agregada correctamente<br><br><a href="../menu.php?opcion=alianzas" target="_parent" style="text-decoration:none; color:#999; font-size:14px;"><img src="../imagenes/icon_ok.png" style="height:100px;"><br><br>Clic para cerrar...</a></div>';
			} else {

		?>
    	<form method="post" action="agregar_alianzas.php" enctype="multipart/form-data">
        	<input type="hidden" name="bandera" value="1" />
						<div id="titulo">Selecciona el logotipo del colaborador</div>
						<input type="file" name="imagen" id="imagen" class="texto_esp" placeholder="Agregar logotipo" required="required"/>
            <div class="clearer" style="height:10px"></div>
						<span>* Medidas: 236px x 148px<br>* Formato de la imagen .png, .svg sin fondo<br>* Nombre de la imagen sin acentos, espacios, signos.</span>
						<div class="clearer" style="height:10px"></div>
            <input type="submit" value="Agregar" class="enviar" />
        </form>
        <?php } ?>
    </div>
</div>
</body>
</html>
