<?php

/* Este archivo debe manejar la lógica de actualizar los datos de un usuario como admin */

$id = preg_replace('#/admin/users/update.html\?id=#', '', $_SERVER['REQUEST_URI']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include $_SERVER['DOCUMENT_ROOT']. '/sesion/valida_sesion.php';
    include '../../../db_config.php';
    $nombre_usr = $_POST["name"];
    $apellido_usr = $_POST["surname"];
    $pais_usr = $_POST["country"];
    $email = $_POST["email"];
    $contrasena = $_POST["pwd"];
    $opciones = array('cost'=>12);
    $id =$_POST["id"];

    $contrasena_hasheada = password_hash($contrasena, PASSWORD_BCRYPT, $opciones);

    $sql = 
    'UPDATE usuario  
    SET nombre=$1,apellido=$2, correo=$3, contraseña=$4, pais=$5 
    WHERE ID =$6;';
    if( pg_query_params($dbconn, $sql, array($nombre_usr,$apellido_usr,$email, $contrasena_hasheada,$pais_usr,$id)) !== FALSE ) {
        pg_close($dbconn);
	echo "Dato actualizado con exito";
    } else {
        echo "no se pudieron actualizar los datos";
        pg_close($dbconn);
    }
    header( "Location: ../all.html");
} 
elseif($id != '') {


$query = 
' SELECT usuario.nombre AS usuario
,apellido,correo,pais.nombre AS pais,
contraseña,
pais.cod_pais AS cod_pais, 
fecha_registro FROM 
pais JOIN usuario
 ON usuario.pais=pais.cod_pais 
 WHERE id = $1
 ';
 
// $sql = 'SELECT nombre,apellido,correo,pais,fecha_registro FROM usuario WHERE correo = $1';
$result = pg_query_params($dbconn, $query, array($id));
if( $result !== FALSE ) {
    pg_close($dbconn);
    $info_usuario = pg_fetch_assoc($result);
} else {
    echo "Usuario no existe";    
    pg_close($dbconn);
    header("Location: /");
}
} else {
header("Location: /");
}
?>