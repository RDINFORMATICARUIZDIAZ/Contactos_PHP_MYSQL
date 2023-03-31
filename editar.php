<?php 

include_once('conexion.php');
session_start();
if (isset($_POST['edit'])) {
	$database = new ConectarDB();
	$db = $database->open();
	try {
        $id= $_GET['id'];
        $nombresc=$_POST['nombres'];
        $cedulac=$_POST['cedula'];
        $apellidosc=$_POST['apellidos'];
        $telefonoc=$_POST['telefono'];
        $direccionc=$_POST['direccion'];
        $emailc=$_POST['email'];
        $fnacimientoc=$_POST['fnacimiento'];

		$sql = "UPDATE personas SET nombres = '$nombresc',cedula = '$cedulac',apellidos = '$apellidosc',telefono = '$telefonoc',direccion = '$direccionc',email = '$emailc',fnacimiento = '$fnacimientoc' WHERE idpersona= '$id'";

		$_SESSION['message']=($db->exec($sql)) ? 'Datos Actualizaron Correctamente' : 'Algo Salio mal, No se pudo Actualizar el contacto';
	
	} catch (PDOException $e) {
		$_SESSION['message']= $e->getMessage();
	}
	$database->close();
}else{
	$_SESSION['message']= 'Rellene el Formulario';

}
header('location: index.php');

?>

  		 




	