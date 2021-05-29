<?php 
session_start();

//En la siguiente linea veremos si el usuario es admin o usuario
if(isset($_SESSION["usuario"])!=FALSE){
    $query_type_user = 'SELECT Administrador FROM usuario WHERE correo = $1';
    $query_type_user  = pg_query_params($dbconn, $query_type_user, array($_SESSION["usuario"]));
    $query_type_user  = pg_fetch_assoc($query_type_user);
    $type_user = $query_type_user["administrador"];
}

/* Este archivo debe usarse para comprobar si existe una sesión válida 
   Considerar qué pasa cuando la sesión es válida/inválida para cada página:
   - Página principal
   - Mi perfil
   - Mi billetera
   - Administración de usuarios y todo el CRUD
   - Iniciar Sesión
   - Registrarse
*/
?>
