<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location: ../../index.php');
}
if (!empty($_GET)) {
	include __DIR__ . '/../conexion.php';

	$sql = "DELETE FROM proveedor WHERE id=" ."'". $_GET["id"]."'";
	$query = $con->query($sql);
	if ($query != null) {
		print "<script>alert(\"Eliminado exitosamente.\");window.location='../../proveedor';</script>";
	} else {
		print "<script>alert(\"No se pudo eliminar.\");window.location='../../proveedor';</script>";
	}
}
