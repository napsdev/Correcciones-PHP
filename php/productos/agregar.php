<?php
if (!empty($_POST)) {
	if (isset($_POST["nombre"]) && isset($_POST["proveedor"]) && isset($_POST["cantidad"]) && isset($_POST["precio_compra"]) && isset($_POST["precio_venta"]) && isset($_POST["id"])) {
		if ($_POST["nombre"] != "" && $_POST["precio_compra"] != "" && $_POST["precio_venta"] != "") {
			include __DIR__ . '/../conexion.php';

			$precio_v = (int)$_POST["precio_venta"];
			$precio_c = (int)$_POST["precio_compra"];
			$cantidad = $precio_v - $precio_c;

			$sql = "insert into productos(id, nombre,proveedor,cantidad,precio_compra,precio_venta,ganancia) value (\"$_POST[id]\",\"$_POST[nombre]\",\"$_POST[proveedor]\",\"$_POST[cantidad]\",\"$_POST[precio_compra]\",\"$_POST[precio_venta]\",\"$cantidad\")";
			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Agregado exitosamente.\");window.location='../../productos';</script>";
			} else {
				print "<script>alert(\"No se pudo agregar, el nombre del producto o la ref ya esta registrado.\");window.location='../../productos';</script>";
			}
		}
	}
}
