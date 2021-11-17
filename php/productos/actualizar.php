<?php
if (!empty($_POST)) {
	if (isset($_POST["nombre"]) && isset($_POST["proveedor"]) && isset($_POST["cantidad"]) && isset($_POST["precio_compra"]) && isset($_POST["precio_venta"])) {
		if ($_POST["nombre"] != "" && $_POST["precio_compra"] != "" && $_POST["precio_venta"] != "") {
			include __DIR__ . '/../conexion.php';

			$precio_v = (int)$_POST["precio_venta"];
			$precio_c = (int)$_POST["precio_compra"];
			$cantidad = $precio_v - $precio_c;

			$sql = "update productos set nombre=\"$_POST[nombre]\",proveedor=\"$_POST[proveedor]\",cantidad=\"$_POST[cantidad]\",precio_compra=\"$_POST[precio_compra]\",precio_venta=\"$_POST[precio_venta]\",ganancia=\"$cantidad\" where id=" ."'". $_POST["id"]."'";
			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../../productos';</script>";
			} else {
				print "<script>alert(\"No se pudo actualizar.\");window.location='../../productos';</script>";
			}
		}
	}
}
