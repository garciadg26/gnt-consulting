<style>
#listado_imagenes{
	width: 14%;
	float: left;
	height: 150px;
	position:relative;
	margin:0 1px 1px 0;
	display: table;
	background:#FFF;
	background-repeat: no-repeat;
}
#btn_1{
	width:50%;
	padding:5px 0;
	text-align:center;
	background:rgba(0,50,105,0.8);
	font-size: 12px;
	position: absolute;
	bottom: 0;
	left: 0;
}
#btn_2{
	width:50%;
	padding:5px 0;
	text-align:center;
	background:rgba(213,23,0,0.9);
	font-size: 12px;
	position: absolute;
	bottom: 0;
	left: 50%;
}
</style>
<?php include "../Public/include/conectar.php"; ?>


<div class="clearer"></div>
<div id="acciones" style="padding:0; margin:0;">
	<?php
        switch (@$_GET['op'])
        {
            default:
				@$borrar=$_GET['borrar'];
				if($borrar=='si'){
					@$alianzas=$_GET['alianzas'];
					mysqli_query($conexion, "DELETE from gnt_alianzas where id_alianzas=$alianzas");
				}
				echo '<div id="listado_clientes">';
				$datos=mysqli_query($conexion, "SELECT * from gnt_alianzas order by id_alianzas asc");
					if(mysqli_num_rows($datos)>0){
						while ($datos2=mysqli_fetch_array($datos)){
							echo '<div id="listado_imagenes" style="background-image:url(../Public/images/svg/'.$datos2['imagen'].'); background-position:fixed center; background-size:100%;">';
								echo '<div id="btn_1"><a href="include/modificar_alianzas.php?alianzas='.$datos2['id_alianzas'].'" class="fancybox fancybox.iframe" style="text-decoration:none; color:#FFF; display:block;"><img src="imagenes/icons-03.svg" style="height:25px;"></a></div>';
								echo '<div id="btn_2"><a href="include/eliminar_alianzas.php?alianzas='.$datos2['id_alianzas'].'" class="fancybox fancybox.iframe" style="text-decoration:none; color:#FFF; display:block;"><img src="imagenes/icons-02.svg" style="height:25px;"></a></div>';

							echo '</div>';
					}}
				echo '<div class="clearer" style="height:10px"></div>';
				echo '<div id="agregar"><a href="include/agregar_alianzas.php" style="text-decoration:none; color:#FFF;" class="fancybox fancybox.iframe"><img src="imagenes/icono_mas.png" /></a></div>';
				echo '</div>';
			break;
        }
    ?>
</div>
