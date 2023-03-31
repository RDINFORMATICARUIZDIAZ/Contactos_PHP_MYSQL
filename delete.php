<?php 

include_once('conexion.php');
session_start();
if (isset($_GET['id'])) {
	$database = new ConectarDB();
	$db = $database->open();
	try {

		$sql = "DELETE FROM personas WHERE idpersona= '".$_GET['id']."'";

		$_SESSION['message']=($db->exec($sql)) ? 'Contacto Eliminado Correctamente' : 'Algo Salio mal, No se pudo Eliminar el contacto';
	
	} catch (PDOException $e) {
		$_SESSION['message']= $e->getMessage();
	}
	$database->close();
}else{
	$_SESSION['message']= 'RSeleccione un Contacto para Eliminar';

}
header('location: index.php');

?>

  		 




	