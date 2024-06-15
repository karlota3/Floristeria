 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conexion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//recoger los datos del form 
$nombre =$_POST["Txt_Nombre"]; 
$apellido = $_POST["Txt_Apellido"]; 
$email = $_POST["Txt_email"]; 

//creamos la sentencia de insert

$sql = "INSERT INTO cliente (firstname, lastname, email)
VALUES ('$nombre', '$apellido', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo dato insertado ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 