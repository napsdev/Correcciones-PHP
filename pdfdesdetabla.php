<?php
//error_reporting(0);
include __DIR__ . '/php/conexion.php';

$user_id = null;
$sql1 = "select * from salidas where id = " . $_GET["id"];
$query = $con->query($sql1);
$person = null;
if ($query->num_rows > 0) {
	while ($r = $query->fetch_object()) {
		$person = $r;
		break;
	}
}

if ($person != null) :
	$pago = $person->metodo_pago;
	$ciudad = $person->ciudad;
	$direccion = $person->direccion;
	$email = $person->email;

	$id1 = $person->id1;
	$id2 = $person->id2;
	$id3 = $person->id3;
	$id4 = $person->id4;
	$id5 = $person->id5;
	$id6 = $person->id6;
	$id7 = $person->id7;
	$id8 = $person->id8;
	$id9 = $person->id9;
	$id10 = $person->id10;

	$fecha = $person->fecha;
	$total = $person->precio_total;
	$clientenombre = $person->clientenombre;
	$identificacion = $person->identificacion;
	$estudio = $person->estudio;
	$telefono = $person->telefono;
	$producto = $person->producto;
	$producto2 = $person->producto2;
	$producto3 = $person->producto3;
	$producto4 = $person->producto4;
	$producto5 = $person->producto5;
	$producto6 = $person->producto6;
	$producto7 = $person->producto7;
	$producto8 = $person->producto8;
	$producto9 = $person->producto9;
	$producto10 = $person->producto10;
	$cproducto = $person->cproducto;
	$cproducto2 = $person->cproducto2;
	$cproducto3 = $person->cproducto3;
	$cproducto4 = $person->cproducto4;
	$cproducto5 = $person->cproducto5;
	$cproducto6 = $person->cproducto6;
	$cproducto7 = $person->cproducto7;
	$cproducto8 = $person->cproducto8;
	$cproducto9 = $person->cproducto9;
	$cproducto10 = $person->cproducto10;
	$pproducto = $person->pproducto;
	$pproducto2 = $person->pproducto2;
	$pproducto3 = $person->pproducto3;
	$pproducto4 = $person->pproducto4;
	$pproducto5 = $person->pproducto5;
	$pproducto6 = $person->pproducto6;
	$pproducto7 = $person->pproducto7;
	$pproducto8 = $person->pproducto8;
	$pproducto9 = $person->pproducto9;
	$pproducto10 = $person->pproducto10;
	$oproducto1 = $person->oproducto1;
	$oproducto2 = $person->oproducto2;
	$oproducto3 = $person->oproducto3;
	$oproducto4 = $person->oproducto4;
	$oproducto5 = $person->oproducto5;
	$oproducto6 = $person->oproducto6;
	$oproducto7 = $person->oproducto7;
	$oproducto8 = $person->oproducto8;
	$oproducto9 = $person->oproducto9;
	$oproducto10 = $person->oproducto10;
			$oproducto11 = $person->oproducto11;
			$oproducto12 = $person->oproducto12;
			$oproducto13 = $person->oproducto13;
			$oproducto14 = $person->oproducto14;
			$oproducto15 = $person->oproducto15;
			$oproducto16 = $person->oproducto16;
			$pproducto11 = $person->pproducto11;
			$pproducto12 = $person->pproducto12;
			$pproducto13 = $person->pproducto13;
			$pproducto14 = $person->pproducto14;
			$pproducto15 = $person->pproducto15;
			$pproducto16 = $person->pproducto16;
			$cproducto11 = $person->cproducto11;
			$cproducto12 = $person->cproducto12;
			$cproducto13 = $person->cproducto13;
			$cproducto14 = $person->cproducto14;
			$cproducto15 = $person->cproducto15;
			$cproducto16 = $person->cproducto16;
			$producto11 = $person->producto11;
			$producto12 = $person->producto12;
			$producto13 = $person->producto13;
			$producto14 = $person->producto14;
			$producto15 = $person->producto15;
			$producto16 = $person->producto16;
			$id11 = $person->id11;
			$id12 = $person->id12;
			$id13 = $person->id13;
			$id14 = $person->id14;
			$id15 = $person->id15;
			$id16 = $person->id16;
else :
	echo 'No hay resultados';
endif;

//Para DB
if ($producto == 'Ninguno' || $producto == null) {
	$producto = "";
}
if ($cproducto == null) {
	$cproducto = "";
}
if ($producto2 == 'Ninguno' || $producto2 == null) {
	$producto2 = "";
}
if ($cproducto2 == null) {
	$cproducto2 = "";
}
if ($producto3 == 'Ninguno' || $producto3 == null) {
	$producto3 = "";
}
if ($cproducto3 == null) {
	$cproducto3 = "";
}
if ($producto4 == 'Ninguno' || $producto4 == null) {
	$producto4 = "";
}
if ($cproducto4 == null ) {
	$cproducto4 = "";
}
if ($producto5 == 'Ninguno' || $producto5 == null) {
	$producto5 = "";
}
if ($cproducto5 == null) {
	$cproducto5 = "";
}
if ($producto6 == 'Ninguno' || $producto6 == null) {
	$producto6 = "";
}
if ($cproducto6 == null) {
	$cproducto6 = "";
}
if ($producto7 == 'Ninguno' || $producto7 == null) {
	$producto7 = "";
}
if ($cproducto7 == null) {
	$cproducto7 = "";
}
if ($producto8 == 'Ninguno' || $producto8 == null) {
	$producto8 = "";
}
if ($cproducto8 == null) {
	$cproducto8 = "";
}
if ($producto9 == 'Ninguno' || $producto9 == null) {
	$producto9 = "";
}
if ($cproducto9 == null) {
	$cproducto9 = "";
}
if ($producto10 == 'Ninguno' || $producto10 == null) {
	$producto10 = "";
}
if ($cproducto10 == null) {
	$cproducto10 = "";
}

if ($pproducto == null) {
	$pproducto = "";
}
if ($pproducto2 == null) {
	$pproducto2 = "";
}
if ($pproducto3 == null) {
	$pproducto3 = "";
}
if ($pproducto4 == null) {
	$pproducto4 = "";
}
if ($pproducto5 == null) {
	$pproducto5 = "";
}
if ($pproducto6 == null) {
	$pproducto6 = "";
}
if ($pproducto7 == null) {
	$pproducto7 = "";
}
if ($pproducto8 == null) {
	$pproducto8 = "";
}
if ($pproducto9 == null) {
	$pproducto9 = "";
}
if ($pproducto10 == null) {
	$pproducto10 = "";
}

//6 mas cproducto
if ($cproducto11 == null) {
	$cproducto11 = "";
}
if ($cproducto12 == null) {
	$cproducto12 = "";
}
if ($cproducto13 == null) {
	$cproducto13 = "";
}
if ($cproducto14 == null) {
	$cproducto14 = "";
}
if ($cproducto15 == null) {
	$cproducto15 = "";
}
if ($cproducto16 == null) {
	$cproducto16 = "";
}

//6 mas producto
if ($producto11 == 'Ninguno' || $producto11 == null) {
	$producto11 = "";
}
if ($producto12 == 'Ninguno' || $producto12 == null) {
	$producto12 = "";
}
if ($producto13 == 'Ninguno' || $producto13 == null) {
	$producto13 = "";
}
if ($producto14 == 'Ninguno' || $producto14 == null) {
	$producto14 = "";
}
if ($producto15 == 'Ninguno' || $producto15 == null) {
	$producto15 = "";
}
if ($producto16 == 'Ninguno' || $producto16 == null) {
	$producto16 = "";
}

//6 mas
if ($pproducto11 == null) {
	$pproducto11 = "";
}
if ($pproducto12 == null) {
	$pproducto12 = "";
}
if ($pproducto13 == null) {
	$pproducto13 = "";
}
if ($pproducto14 == null) {
	$pproducto14 = "";
}
if ($pproducto15 == null) {
	$pproducto15 = "";
}
if ($pproducto16 == null) {
	$pproducto16 = "";
}




//Plantilla HTML
require('pdfrecibo/index2.php');
$id = $_GET["id"];
//Plantilla para enviar variables
$plantilla = llamarplantilla(
	$id,
	$fecha,
	$total,
	$clientenombre,
	$identificacion,
	$estudio,
	$telefono,
	$ciudad,
	$direccion,
	$email,
	$id1,
	$id2,
	$id3,
	$id4,
	$id5,
	$id6,
	$id7,
	$id8,
	$id9,
	$id10,

	$id11,
	$id12,
	$id13,
	$id14,
	$id15,
	$id16,


	$producto,
	$producto2,
	$producto3,
	$producto4,
	$producto5,
	$producto6,
	$producto7,
	$producto8,
	$producto9,
	$producto10,

	$producto11,
	$producto12,
	$producto13,
	$producto14,
	$producto15,
	$producto16,

	$cproducto,
	$cproducto2,
	$cproducto3,
	$cproducto4,
	$cproducto5,
	$cproducto6,
	$cproducto7,
	$cproducto8,
	$cproducto9,
	$cproducto10,

	$cproducto11,
	$cproducto12,
	$cproducto13,
	$cproducto14,
	$cproducto15,
	$cproducto16,

	$pproducto,
	$pproducto2,
	$pproducto3,
	$pproducto4,
	$pproducto5,
	$pproducto6,
	$pproducto7,
	$pproducto8,
	$pproducto9,
	$pproducto10,

	$pproducto11,
	$pproducto12,
	$pproducto13,
	$pproducto14,
	$pproducto15,
	$pproducto16,

	$oproducto1,
	$oproducto2,
	$oproducto3,
	$oproducto4,
	$oproducto5,
	$oproducto6,
	$oproducto7,
	$oproducto8,
	$oproducto9,
	$oproducto10,

	$oproducto11,
	$oproducto12,
	$oproducto13,
	$oproducto14,
	$oproducto15,
	$oproducto16,

	$pago
);

require_once('vendor/autoload.php');
//CSS plantilla
$css = file_get_contents('pdfrecibo/style.css');
$mpdf = new \Mpdf\Mpdf([
	'mode' => 'utf-8', 'format' => [220, 280], 'margin_top' => 0,
	'margin_left' => 7,
	'margin_right' => 7,
	'mirrorMargins' => true
]);
$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output('C_Cobro_' . $id . '.pdf', "I");
