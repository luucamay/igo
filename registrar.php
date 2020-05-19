<?php
$db = new mysqli('localhost','root','','igo');
//probar la conexión

//probar la conexión
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
	echo "Conexion fallida";
}

$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$disponibilidad = $_POST['disponibilidad'];
echo $disponibilidad;

$sql="INSERT INTO colaboradores (id,nombre,apellido,correo,telefono,disponibilidad) VALUES(1,'".$nombre."','".$apellido."','".$correo."',".$telefono.",'".$disponibilidad."')";
			
	$query=$db->query($sql);

	if($query){
			$url='./';
			header("Location: ".$url);
			die();
	} else {
    echo "invalid user";
    }
?>

