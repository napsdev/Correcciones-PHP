<?php

if (!empty($_POST)) {
	if (isset($_POST["fecha"]) && isset($_POST["nombre"]) && isset($_POST["cantidad"])) {
		if ($_POST["fecha"] != "" && $_POST["nombre"] != "" && $_POST["cantidad"] != "") {
			include __DIR__ . '/../conexion.php';

			$sql = "update entradas set nombre=\"$_POST[nombre]\",fecha=\"$_POST[fecha]\",cantidad=\"$_POST[cantidad]\" where id=" . $_POST["id"];

			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../../entradas';</script>";
			} else {
				print "<script>alert(\"No se pudo actualizar.\");window.location='../../entradas';</script>";
			}
		}
	}
}
