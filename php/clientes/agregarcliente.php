<?php

if (!empty($_POST)) {
	if (isset($_POST["nombre"]) && isset($_POST["id"])) {
		if ($_POST["nombre"] != "" && $_POST["id"] != "") {
			include __DIR__ . '/../conexion.php';
			$sql = "insert into clientes(id,nombre,estudio,direccion,ciudad,telefono,email) value (\"$_POST[id]\",\"$_POST[nombre]\",\"$_POST[estudio]\",\"$_POST[direccion]\",\"$_POST[ciudad]\",\"$_POST[telefono]\",\"$_POST[email]\")";
			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Agregado exitosamente.\");window.location='../../clientes';</script>";
			} else {
				print "<script>alert(\"Ya existe un cliente con este teléfono.\");window.location='../../clientes';</script>";
			}
		}
	}
}
