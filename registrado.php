<?php
// Variables que recogen los datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["contrasena"];
$password2 = $_POST["contrasena2"];
$privacidad = $_POST["privacidad"];
$spam = isset($_POST["spam"]) ?? null; //Con isset hacemos que si esta seleccinado coja el valor del formulario y si no que se quede como vacio

// Decir que la privacidad en vez de salir on que es por defecto salga Si
if ($privacidad == "on") {
    $privacidad = "Si";
}

/* Con esto muestras si se ha elegido la opcion de spam se mostrara la mismo 
   de arriba y si no esta elegido que no te muestre opcion por defecto */
if ($spam != null) {
    $spam = "Si";
} else {
    $spam = "No se ha elegido";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrado</title>
</head>
<body>
    <p>Nombre: <?= "$nombre"; ?></p>
    <p>Email: <?= "$email";?></p>
    <p>Contraseña: <?= "$password";?></p>
    <p>Repetir contraseña: <?= "$password2";?></p>
    <p>Leiste los terminos y condiciones: <?= "$privacidad";?></p>
    <p>¿Se eligio el spam? <?= "$spam"?></p>
</body>
</html>