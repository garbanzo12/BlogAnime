<?php 
// Inicializar variables para mensajes de éxito y error
$mensaje_exito = "";
$mensaje_error = "";

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar que los campos no estén vacíos
    if (empty($nombre) || empty($apellidos) || empty($email) || empty($password)) {
        $mensaje_error = "Todos los campos son obligatorios.";
    } else {
        // Verificar si el email ya está registrado
        $sql = "SELECT id FROM usuarios WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $mensaje_error = "El email ya está registrado.";
        } else {
            // Hash de la contraseña para mayor seguridad
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insertar datos en la base de datos
            $sql = "INSERT INTO usuarios (nombre, apellidos, email, password) 
                    VALUES ('$nombre', '$apellidos', '$email', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
                $mensaje_exito = "Registro exitoso. ¡Bienvenido!";
            } else {
                $mensaje_error = "Error al registrar: " . $conn->error;
            }
        }
    }
}

$conn->close();
?>