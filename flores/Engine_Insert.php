<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flores";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// recoger los datos del form 
$nombre = $_POST["Txt_Nombre"]; 
$apellido_P = $_POST["Txt_Apellido_P"];
$apellido_M = $_POST["Txt_Apellido_M"];
$email = $_POST["Txt_email"]; 
$sexo = $_POST["Sexo"]; // Missing semicolon added here

// creamos la sentencia de insert
$sql = "INSERT INTO cliente(CLIENTE_NOMBRE, CLIENTE_APE_PAT, CLIENTE_APE_MAT,
CLIENTE_CORREO, SEXO)
VALUES ('$nombre', '$apellido_P', '$apellido_M', '$email', '$sexo')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo dato insertado ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
