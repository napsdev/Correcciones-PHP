<?php
if (!empty($_GET)) {
	include __DIR__ . '/../conexion.php';

	$sql = "DELETE FROM clientes WHERE id="."'".$_GET["id"]."'";
	$query = $con->query($sql);
	if ($query != null) {
		print "<script>alert(\"Eliminado exitosamente.\");window.location='../../clientes';</script>";
	} else {
		print "<script>alert(\"No se pudo eliminar.\");window.location='../../clientes';</script>";
	}
}
