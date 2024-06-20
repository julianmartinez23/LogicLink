<?php
// Configuración de la conexión a la base de datos en el mismo servidor (localhost)
$servername = "127.0.0.1";
$username = "root";
$password = ""; // Dejar la contraseña vacía
$dbname = "grud";
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener todos los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

// Mostrar los resultados de la consulta
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Descripción: " . $row["descripcion"]. " - Precio: " . $row["precio"]. " - Stock: " . $row["stock"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conn->close();
?>
<?php
include 'conexion.php'; // Incluye el archivo de conexión

// Función para insertar un usuario
function insertarUsuario($nombre, $apellido, $email, $contraseña, $tipo) {
    global $conn;
    $sql = "INSERT INTO Usuarios (nombre, apellido, email, contraseña, tipo) VALUES ('$nombre', '$apellido', '$email', '$contraseña', '$tipo')";
    if ($conn->query($sql) === TRUE) {
        return "Usuario insertado exitosamente";
    } else {
        return "Error al insertar usuario: " . $conn->error;
    }
}

// Función para obtener un usuario por su ID
function obtenerUsuarioPorId($id) {
    global $conn;
    $sql = "SELECT * FROM Usuarios WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return "Usuario no encontrado";
    }
}

// Función para actualizar un usuario
function actualizarUsuario($id, $nombre, $apellido, $email, $contraseña, $tipo) {
    global $conn;
    $sql = "UPDATE Usuarios SET nombre='$nombre', apellido='$apellido', email='$email', contraseña='$contraseña', tipo='$tipo' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return "Usuario actualizado exitosamente";
    } else {
        return "Error al actualizar usuario: " . $conn->error;
    }
}

// Función para eliminar un usuario por su ID
function eliminarUsuario($id) {
    global $conn;
    $sql = "DELETE FROM Usuarios WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return "Usuario eliminado exitosamente";
    } else {
        return "Error al eliminar usuario: " . $conn->error;
    }
}
?>

