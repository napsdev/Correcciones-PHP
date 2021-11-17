<?php

if (!empty($_POST)) {
	if (isset($_POST["id"]) && isset($_POST["nombre"])) {
		if ($_POST["id"] != "" && $_POST["nombre"]) {

			include __DIR__ . '/../conexion.php';

			$sql = "update clientes set nombre=\"$_POST[nombre]\",estudio=\"$_POST[estudio]\",direccion=\"$_POST[direccion]\",ciudad=\"$_POST[ciudad]\",telefono=\"$_POST[telefono]\",email=\"$_POST[email]\" where id=" ."'". $_POST["id"]."'";

			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../../clientes';</script>";
			} else {
				print "<script>alert(\"No se pudo actualizar.\");window.location='../../clientes';</script>";
			}
		}
	}
}
