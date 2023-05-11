
<?php include_once "../Public/include/conectar.php"; ?>


<div class="clearer"></div>
<div id="acciones" style="padding:0; margin:0;">
	<?php

        
        switch (@$_GET['op'])
        {
            default:
				@$borrar=$_GET['borrar'];
				if($borrar=='si'){
					@$slide=$_GET['slide'];
					mysqli_query($conexion, "DELETE from gnt_slide where id_slide=$slide");
				}
				echo '<div id="agregar"><a href="include/agregar_slide.php" style="text-decoration:none; color:#FFF;" class="fancybox fancybox.iframe"><img src="imagenes/icono_mas.png" /></a></div>';
				echo '<div id="listado_clientes">';
				$datos=mysqli_query($conexion, "SELECT id_slide, titulo, imagen, visible, fecha FROM gnt_slide ORDER BY id_slide ASC");
					if(mysqli_num_rows($datos)>0){
						while ($datos2=mysqli_fetch_array($datos)){
							echo '<div style="width:100%; height:auto; display:table; font-size:12px; background:rgba(255,255,255,0.7);">';
								echo '<div style="width:5%; padding:0; float:left; text-align:left;"><img style="width:100%;" src="../Public/images/'.$datos2['imagen'].'" height="35px"></div>';
								echo '<div style="width:32%; padding:10px 1%; float:left; text-align:left;">'.$datos2['titulo'].'</div>';
								echo '<div style="width:16%; padding:10px 0; float:left; text-align:center;">'.f_fecha($datos2['fecha']).'</div>';
								echo '<div style="width:10%; padding:10px 0; float:left; text-align:center; background:rgba(0,217,217,0.9);">VISIBLE - '.$datos2['visible'].'</div>';
								echo '<div style="width:20%; padding:6px 0; float:left; text-align:center; background:rgba(0,50,105,0.8);"><a href="include/modificar_slide.php?slide='.$datos2['id_slide'].'" class="fancybox fancybox.iframe" style="text-decoration:none; color:#FFF; display:block;"><img src="imagenes/icons-03.svg" style="height:24px;"></a></div>';
								echo '<div style="width:15%; padding:6px 0; float:left; text-align:center; background:rgba(213,23,0,0.9);"><a href="include/eliminar_slide.php?slide='.$datos2['id_slide'].'" class="fancybox fancybox.iframe" style="text-decoration:none; color:#FFF; display:block;"><img src="imagenes/icons-02.svg" style="height:24px;"></a></div>';

							echo '</div>';
							echo '<div class="clearer" style="height:1px;"></div>';
					}}
				echo '<div id="agregar"><a href="include/agregar_slide.php" style="text-decoration:none; color:#FFF;" class="fancybox fancybox.iframe"><img src="imagenes/icono_mas.png" /></a></div>';
				echo '</div>';
			break;
        }
    ?>
</div>
