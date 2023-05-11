<?php
	$mysqli = new mysqli("localhost", "gntUser", "Gtn$2023*", "gnt_consulting");
	$mysqli->set_charset("utf8");
	/* verificar la conexión */
    if (mysqli_connect_errno()) {
        printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
        exit();
    } else {
        echo "Database Connection Successfully.";
    }

    $username = 'ricardo';
    $password = 'Gnt$2023*';
    echo $username;
    echo $password;


    /*VALIDANDO USUARIO*/
    $sql = "SELECT COUNT(*) AS existe FROM usuarios WHERE usuario='$username' AND contrasena='$password'";
    $result = mysqli_query($conexion, $sql);
    @$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    @$existe=$row['existe'];
    echo "Valor ex: " . $row['existe'];
    if($existe !== 0){
        echo '<div style="padding:20px 0; color:#000; font-size:15px;">Alguno de los datos no es correcto.<br><br><a href="index.php" style="padding:10px; background:#FFF; text-decoration:none; color:#333;">Intentar nuevamente</a></div>';
    } else {
        echo "Continuar";
    }
?>