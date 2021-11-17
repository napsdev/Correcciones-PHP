<?php
if (!empty($_POST)) {
	if (isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["contacto"]) && isset($_POST["telefono"]) && isset($_POST["ciudad"])) {
		if ($_POST["id"] != "" && $_POST["nombre"] != "" && $_POST["telefono"] != "") {

			include __DIR__ . '/../conexion.php';

			$sql = "update proveedor set nombre=\"$_POST[nombre]\",contacto=\"$_POST[contacto]\",telefono=\"$_POST[telefono]\",ciudad=\"$_POST[ciudad]\" where id=" ."'". $_POST["id"]."'";

			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../../proveedor';</script>";
			} else {
				print "<script>alert(\"No se pudo actualizar.\");window.location='../../proveedor';</script>";
			}
		}
	}
}
