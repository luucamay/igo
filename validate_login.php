<?php
$db = new mysqli('localhost','root','m1gr4n4!','igo');
//probar la conexión
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
	echo "Conexion fallida";
}

// Grab User submitted information
if(!isset($_POST["usuario"])){
	$_POST["usuario"]=null;
}
if(!isset($_POST["pass"])){
	$_POST["pass"]=null;
}

$user = $_POST["usuario"];
$pass = $_POST["pass"];

$sql='SELECT usuario, contrasenia FROM administradores WHERE usuario = '.$user;
	$query=$db->query($sql);
	if(true){
			$url='/algo';
			header("Location: ".$url);
			die();
	} else {
    echo "invalid user";
    }
?>

