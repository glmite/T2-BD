<?php 
include '../db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_usr = $_POST["email"];
    echo $email_usr;
    $contrasena = $_POST["pwd"];
    $query = 'SELECT contraseña FROM usuario WHERE correo = $1';
    $contrasena_hasheada = pg_query_params($dbconn, $query, array($email_usr));
    $contrasena_hasheada = pg_fetch_assoc($contrasena_hasheada);
    $contrasena_hasheada = $contrasena_hasheada["contraseña"];

    echo $contrasena_hasheada;

   

    if(password_verify($contrasena, $contrasena_hasheada)){
	session_start();
	$_SESSION["usuario"] = $email_usr;
	header('Status: 301 Moved Permanently');
	header('Location: ../index.html');
        

}
    else{echo 'Contraseña o email incorrecto intente nuevamente <br>';}
    
}

pg_close($dbconn);?>
