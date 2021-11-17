<?php
if (!empty($_POST)) {
	if (isset($_POST["id"]) && isset($_POST["des"]) && isset($_POST["val"]) && isset($_POST["fecha"])) {
		if ($_POST["id"] != "" && $_POST["des"] != "" && $_POST["val"] != "" && $_POST["fecha"] != "") {

			include __DIR__ . '/../conexion.php';

			$sql = "update gastos set descripcion=\"$_POST[des]\",valor=\"$_POST[val]\",fecha=\"$_POST[fecha]\" where id=" ."'". $_POST["id"]."'";

			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../../gastos';</script>";
			} else {
				print "<script>alert(\"No se pudo actualizar.\");window.location='../../gastos';</script>";
			}
		}
	}
}
