<?php 

include_once('conexion.php');
session_start();
if (isset($_POST['add'])) {
	$database = new ConectarDB();
	$db = $database->open();
	try {
		$stmt = $db->prepare("INSERT INTO personas (nombres, cedula, apellidos, telefono, direccion, email, fnacimiento) VALUES (:nombres, :cedula, :apellidos, :telefono, :direccion, :email, :fnacimiento)");
		$_SESSION['message']=($stmt->execute(array(':nombres'=>$_POST['nombres'],':cedula'=>$_POST['cedula'],':apellidos'=>$_POST['apellidos'],':telefono'=>$_POST['telefono'],':direccion'=>$_POST['direccion'],':email'=>$_POST['email'],':fnacimiento'=>$_POST['fnacimiento']))) ? 'Contacto agregado correctamente' : 'Algo Salio mal, No se pudo agregar el contacto';
	
	} catch (PDOException $e) {
		$_SESSION['message']= $e->getMessage();
	}
	$database->close();
}else{
	$_SESSION['message']= 'Rellene el Formulario';

}
header('location: index.php');

?>

  		 




	