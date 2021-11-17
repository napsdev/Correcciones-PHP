<?php
//fecha,nombre,cantidad,producto
if (!empty($_POST)) {
	if (isset($_POST["fecha"]) && isset($_POST["nombre"]) && isset($_POST["cantidad"]) && isset($_POST["producto"])) {
		if ($_POST["producto"] != "" && $_POST["nombre"] != "" && $_POST["cantidad"] != "") {
			include __DIR__ . '/../conexion.php';


			$sql2 = "select cantidad from productos where nombre = \"$_POST[producto]\"";
			$query3 = $con->query($sql2);
			$entero = mysqli_fetch_row($query3);


			$dato1 = (int)$entero[0];
			$dato2 = (int)$_POST["cantidad"];

			$sum = $dato1 + $dato2;

			$sqlup = "update productos set cantidad=\"$sum\" where nombre=\"$_POST[producto]\"";
			$query2 = $con->query($sqlup);


			$sql = "insert into entradas(fecha,nombre,cantidad,producto) value (\"$_POST[fecha]\",\"$_POST[nombre]\",\"$_POST[cantidad]\",\"$_POST[producto]\")";
			$query = $con->query($sql);

			if ($query != null && $query2 != null) {
				print "<script>alert(\"Agregado exitosamente.\");window.location='../../entradas';</script>";
			} else {
				print "<script>alert(\"No se pudo agregar.\");window.location='../../entradas';</script>";
			}
		}
	}
}
