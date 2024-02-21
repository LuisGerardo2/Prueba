<?php
$servidor="localhost";
$usuario="root";
$clave="";
$base="agendatelefonica";
$conn = new mysqli($servidor, $usuario, $clave);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";
$db = mysqli_select_db( $conn, $base ) or die ( "Upps! Pues va a ser que no se ha encontrado la base ");
$nombre = utf8_decode($_POST['NOMBRE']);
$telefono=utf8_decode($_POST['TELEFONO']);
$sql ="INSERT INTO agenda (nombre, telefono) VALUES ('$nombre', '$telefono')";
if (mysqli_query($conn, $sql)) {
      echo "Su registro se hizo correctamente<br>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>