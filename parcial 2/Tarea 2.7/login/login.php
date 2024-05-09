<?php
$db = mysqli_connect('localhost', 'root', '', 'sistema', '3306');

if ($db->connect_error) {
    die('Error de conexión: ' . $db->connect_error);
}
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$password_encriptado = sha1($password);

$sql = "SELECT * FROM usuarios WHERE login='$usuario' AND password='$password' OR login='$usuario' AND password='$password_encriptado'";
$resultado = $db->query($sql);

if ($resultado->num_rows > 0) {
    echo '<div style="text-align: center; margin-top: 50vh; transform: translateY(-50%);"><H1>¡Bienvenido ' . $usuario . '! Has iniciado sesión correctamente.</H1></div>';


} else {
    echo 'Error de login: Usuario o contraseña incorrectos.';
}

$db->close();

