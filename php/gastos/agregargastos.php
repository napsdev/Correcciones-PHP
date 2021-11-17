<?php
if (!empty($_POST)) {
	if (isset($_POST["des"]) && isset($_POST["val"]) && isset($_POST["fecha"])) {
		if ($_POST["des"] != "" && $_POST["val"] != "" && $_POST["fecha"] != "") {
			include __DIR__ . '/../conexion.php';

			$sql = "insert into gastos(descripcion,valor,fecha) value (\"$_POST[des]\",\"$_POST[val]\",\"$_POST[fecha]\")";
			$query = $con->query($sql);
			if ($query != null) {
				print "<script>alert(\"Agregado exitosamente.\");window.location='../../gastos';</script>";
			} else {
				print "<script>alert(\"Ya existe un gasto con esta identificación.\");window.location='../../gastos';</script>";
			}
		}
	}
}
