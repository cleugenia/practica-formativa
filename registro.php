<?php
// Recibe datos enviados con fetch en formato JSON
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $usuario = $data['usuario'] ?? 'Sin nombre';
    $contrasena = $data['contrasena'] ?? 'Sin contraseña';

    echo "Usuario recibido: $usuario. Contraseña: $contrasena";
} else {
    echo "No se recibieron datos válidos.";
}
?>
