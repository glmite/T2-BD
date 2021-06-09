# Tarea 2 Bases de Datos 2021-1 Grupo 1

## Integrantes:
* Bastián Araya Tapia - 201710031-1
* Roberto González Fuentes - 20181001-3
* Francisco Nilsson Berrios - 201810015-3
* Amanda Salinas Pinto - 201810013-7

## Supuestos:

## Modificaciones:
* En la tabla usuarios se modifico la primary key. Se puso como primary key la columna correo. Ademas se agregó la columna administrador la cual guarda true en caso de ser administrador y false en caso contrario. 

* Se creó un usuario administrador de correo admin@sansano.usm.cl y contraseña 1234 para el testeo. 
Las contraseñas fueron hasheadas mediante password_hash de php con un costo mayor o igual a 12

* Se agregó en log-in.html un codigo php que valida que un usuario loggeado no pueda ingresar a la pagina. Redirecciona a la pagina principal.

* Se agregó en sign-up.html un codigo php que no permite ingresar a la pagina al estar loggeado. Redirecciona a la pagina principal.

* Se modificó index.html para poner un banner con css. Tambien se modifico el titulo principal dependiendo de si se está loggeado o no. En caso de estár loggeado la pagina cambia el titulo a "Hola! Nombre Apellido". En caso de ser administrador el titulo es "Hola! Nombre Apellido (Admin)". 

* Se agregó en navbar distintos codigos para condicionar los opciones disponibles para el estado del usuario.
- Si no hay usuario loggeado aparece Iniciar sesión y registrarse.
- Si hay usuario loggeado no aparece la opción iniciar sesión ni registrarse.
- Si el usuario loggeado es administrador le aparece la opcion perfil y usuario
- Si el usuario loggeado no es administrador le aparece la opción perfil y billetera

## Identifcación del admin (preguntar a ayudantes)
Modelo Usado:  Se modificó la primary en la tabla usuarios, Se puso como primary key la columna correo. Ademas se agregó la columna administrador con valores booleanos 

* __Ventajas__: Las consultas se realizan de manera mas sencilla, solo se modifican tres tablas de la base de datos. 

* __Desventajas__: Valores muy grandes para una primary key. Es mas costoso que un id. Se guardan demasiados falses en la columna administrador, seria mas conveniente crear una tabla nueva, pero complejiza las consultas. 

## Dificultades
*  Familiarizarse con php.
*  Modificar la base de datos.

Puede variar desde instalación de tecnologías, ajuste de modelo, proceso creativo,
desarrollo, etc

## Tiempo utilizado
* Bastián Araya Tapia - 201710031-1 
* Roberto González Fuentes - 20181001-3 
* Francisco Nilsson Berrios - 201810015-3 
* Amanda Salinas Pinto - 201810013-7 

Análisis del Enunciado, Modificaciones y ajustes al Modelo,
Diseño de plataforma, Desarrollo de Plataforma, Pruebas Finales.


