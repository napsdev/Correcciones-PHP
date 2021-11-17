<?php
if (!empty($_POST)) {
	if (isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["contacto"]) && isset($_POST["telefono"]) && isset($_POST["ciudad"])) {
		if ($_POST["id"] != "" && $_POST["nombre"] != "" && $_POST["telefono"] != "") {
			include __DIR__ . '/../conexion.php';

			$sql = "insert into proveedor(id,nombre,contacto,telefono,ciudad) value (\"$_POST[id]\",\"$_POST[nombre]\",\"$_POST[contacto]\",\"$_POST[telefono]\",\"$_POST[ciudad]\")";
			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Agregado exitosamente.\");window.location='../../proveedor';</script>";
			} else {
				print "<script>alert(\"Ya existe un proveedor con esta identificación.\");window.location='../../proveedor';</script>";
			}
		}
	}
}
