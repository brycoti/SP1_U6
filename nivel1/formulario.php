<?php
session_start();

/* Ejercicio 1 y 2:
$_SERVER verifica si se ha enviado el formulario con el metodo POST,
 mientras que el isset verifica si el POST ha sido enviado tras pulsar el boton de enviar
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['boton'])) {
    // guardamos en una variable el input recogido mediante el atributo name y el método Post
    $nombreUsuario = $_POST['nombreUsuario'];
    $aficion = $_POST['aficion'];
    $idioma = $_POST['idioma'];
    /* $SESSION cogera el valor de nombreUsuario para cada pagina PHP que contenga session_start
     y así poder mostrar el valor de la variable de sesion */
    $_SESSION['nombreUsuario'] = $nombreUsuario;

    echo "Me llamo {$_SESSION['nombreUsuario']} y mi afición es  $aficion. Mi lengua materna es $idioma!"; // output
}
?>