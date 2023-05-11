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
	color:rgba(0,51,102,1);
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
.texto_file{
	width:85%;
	padding:15px 5%;
	border:none;
	border-radius:15px;
	background:#FFF;
	border:solid 1px #333;
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
	color: #666;
}
</style>
<!-- <script type="text/javascript" src="../js/functios.js"></script> -->
<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,|,fontsizeselect,hr,removeformat,|,sub,sup",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,blockquote,|,link,unlink,image,code,|,media,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/pan.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
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
						@$visible=$_POST['visible'];
						@$titulo=$_POST['titulo'];
						@$titulo_eng=$_POST['titulo_eng'];
						@$link=$_POST['null'];
						$fecha=date("Y-m-d");

						$archivo = $_FILES['imagen']['name'];
						if ($archivo != NULL){
								$archTemp = $_FILES['imagen']['tmp_name'];
								$folder = "../../Public/images/$archivo";
								@copy ($archTemp,$folder);
						}

				mysqli_query($conexion, "insert into gnt_slide (titulo, titulo_eng, imagen, link, fecha, visible) values('$titulo', '$titulo_eng', '$archivo', '$link', '$fecha', 'si')");
				echo '<div id="mensaje">Información agregada correctamente<br><br><a href="../menu.php?opcion=slide" target="_parent"><img src="../imagenes/icon_ok.png" style="height:100px;"></a></div>';
			} else {

		?>
    	<form method="post" action="agregar_slide.php" enctype="multipart/form-data">
        	<input type="hidden" name="bandera" value="1" />
            <img src="../imagenes/bandera_espanol.png" style="height:15px;">
            <div class="clearer" style="height:5px"></div>
			<textarea name="titulo" id="titulo" class="texto_esp" placeholder="* Sabor"></textarea>
            <!-- <input type="text" name="titulo" id="titulo" class="texto_esp" placeholder="* Título del slide"  required="required"/> -->
            <!-- <div class="clearer" style="height:10px"></div> -->
						<!-- <input type="text" name="link" id="link" class="texto_esp" placeholder="Link (Opcional)"/> -->
            <div class="clearer" style="height:10px"></div>
						<img src="../imagenes/bandera_ingles.png" style="height:15px;">
						<div class="clearer" style="height:5px"></div>
						<!-- <input type="text" name="titulo_eng" id="titulo_eng" class="texto_eng" placeholder="* Título del slide"  required="required"/> -->
						<textarea name="titulo_eng" id="titulo_eng" class="texto_eng" placeholder="* Slider title"></textarea>
            <div class="clearer" style="height:10px"></div>
            <input type="file" name="imagen" id="imagen" class="texto_file" placeholder="Agregar slide" required="required"/>
			<p style="font-size: 12px">* Medidas: 1600px x 855px<br>* Nombre del archivo sin acentos, espacios, signos.</p>
            <div class="clearer" style="height:10px"></div>
            <input type="submit" value="Agregar" class="enviar" />
        </form>
        <?php } ?>
    </div>
</div>
</body>
</html>
