<?php
//Ocultar errores al no enviar un mul, OJO, Cuidado.
error_reporting(0);
// Fecha obligatorio
$fecha = $_POST["fecha"];
//Total factura
$total = $_POST["resultado"];
$id='Cotización';
//Nombre producto
$producto = $_POST["nombre_producto"];
$producto2 = $_POST["nombre_producto2"];
$producto3 = $_POST["nombre_producto3"];
$producto4 = $_POST["nombre_producto4"];
$producto5 = $_POST["nombre_producto5"];
$producto6 = $_POST["nombre_producto6"];
$producto7 = $_POST["nombre_producto7"];
$producto8 = $_POST["nombre_producto8"];
$producto9 = $_POST["nombre_producto9"];
$producto10 = $_POST["nombre_producto10"];

//6 mas
$producto11 = $_POST["nombre_producto11"];
$producto12 = $_POST["nombre_producto12"];
$producto13 = $_POST["nombre_producto13"];
$producto14 = $_POST["nombre_producto14"];
$producto15 = $_POST["nombre_producto15"];
$producto16 = $_POST["nombre_producto16"];


//Multiplicacion cantidad x precio 1
$cproducto = (int)$_POST["mul2"];
$cproducto2 = (int)$_POST["mul4"];
$cproducto3 = (int)$_POST["mul5"];
$cproducto4 = (int)$_POST["mul7"];
$cproducto5 = (int)$_POST["mul9"];
$cproducto6 = (int)$_POST["mul11"];
$cproducto7 = (int)$_POST["mul14"];
$cproducto8 = (int)$_POST["mul15"];
$cproducto9 = (int)$_POST["mul18"];
$cproducto10 = (int)$_POST["mul20"];
$cproducto11 = (int)$_POST["mul31"];
$cproducto12 = (int)$_POST["mul33"];
$cproducto13 = (int)$_POST["mul35"];
$cproducto14 = (int)$_POST["mul36"];
$cproducto15 = (int)$_POST["mul39"];
$cproducto16 = (int)$_POST["mul41"];


$ganac=(int)$_POST["ganac"];
$ganac2=(int)$_POST["ganac2"];
$ganac3=(int)$_POST["ganac3"];
$ganac4=(int)$_POST["ganac4"];
$ganac5=(int)$_POST["ganac5"];
$ganac6=(int)$_POST["ganac6"];
$ganac7=(int)$_POST["ganac7"];
$ganac8=(int)$_POST["ganac8"];
$ganac9=(int)$_POST["ganac9"];
$ganac10=(int)$_POST["ganac10"];
$ganac11=(int)$_POST["ganac11"];
$ganac12=(int)$_POST["ganac12"];
$ganac13=(int)$_POST["ganac13"];
$ganac14=(int)$_POST["ganac14"];
$ganac15=(int)$_POST["ganac15"];
$ganac16=(int)$_POST["ganac16"];


if ($cproducto == null || $cproducto=="") {
	$cproducto = 0;
}
if ($cproducto2 == null || $cproducto2=="") {
	$cproducto2 = 0;
}
if ($cproducto3 == null || $cproducto3=="") {
	$cproducto3 = 0;
}
if ($cproducto4 == null || $cproducto4=="") {
	$cproducto4 = 0;
}
if ($cproducto5 == null || $cproducto5=="") {
	$cproducto5 = 0;
}
if ($cproducto6 == null || $cproducto6=="") {
	$cproducto6 = 0;
}
if ($cproducto7 == null || $cproducto7=="") {
	$cproducto7 = 0;
}
if ($cproducto8 == null || $cproducto8=="") {
	$cproducto8 = 0;
}
if ($cproducto9 == null || $cproducto9=="") {
	$cproducto9 = 0;
}
if ($cproducto10 == null || $cproducto10=="") {
	$cproducto10 = 0;
}
if ($cproducto11 == null || $cproducto11=="") {
	$cproducto11 = 0;
}
if ($cproducto12 == null || $cproducto12=="") {
	$cproducto12 = 0;
}
if ($cproducto13 == null || $cproducto13=="") {
	$cproducto13 = 0;
}
if ($cproducto14 == null || $cproducto14=="") {
	$cproducto14 = 0;
}
if ($cproducto15 == null || $cproducto15=="") {
	$cproducto15 = 0;
}
if ($cproducto16 == null || $cproducto16=="") {
	$cproducto16 = 0;
}


if ($ganac == null || $ganac=="") {
	$ganac = 0;
}
if ($ganac2 == null || $ganac2=="") {
	$ganac2 = 0;
}
if ($ganac3 == null || $ganac3=="") {
	$ganac3 = 0;
}
if ($ganac4 == null || $ganac4=="") {
	$ganac4 = 0;
}
if ($ganac5 == null || $ganac5=="") {
	$ganac5 = 0;
}
if ($ganac6 == null || $ganac6=="") {
	$ganac6 = 0;
}
if ($ganac7 == null || $ganac7=="") {
	$ganac7 = 0;
}
if ($ganac8 == null || $ganac8=="") {
	$ganac8 = 0;
}
if ($ganac9 == null || $ganac9=="") {
	$ganac9 = 0;
}
if ($ganac10 == null || $ganac10=="") {
	$ganac10 = 0;
}
if ($ganac11 == null || $ganac11=="") {
	$ganac11 = 0;
}
if ($ganac12 == null || $ganac12=="") {
	$ganac12 = 0;
}
if ($ganac13 == null || $ganac13=="") {
	$ganac13 = 0;
}
if ($ganac14 == null || $ganac14=="") {
	$ganac14 = 0;
}
if ($ganac15 == null || $ganac15=="") {
	$ganac15 = 0;
}
if ($ganac16 == null || $ganac16=="") {
	$ganac16 = 0;
}


$g1=$cproducto*$ganac;
$g2=$cproducto2*$ganac2;
$g3=$cproducto3*$ganac3;
$g4=$cproducto4*$ganac4;
$g5=$cproducto5*$ganac5;
$g6=$cproducto6*$ganac6;
$g7=$cproducto7*$ganac7;
$g8=$cproducto8*$ganac8;
$g9=$cproducto9*$ganac9;
$g10=$cproducto10*$ganac10;
$g11=$cproducto11*$ganac11; 
$g12=$cproducto12*$ganac12;
$g13=$cproducto13*$ganac13;
$g14=$cproducto14*$ganac14;
$g15=$cproducto15*$ganac15;
$g16=$cproducto16*$ganac16;

$ganancia =$g1+$g2+$g3+$g4+$g5+$g6+$g7+$g8+$g9+$g10+$g11+$g12+$g13+$g14+$g15+$g16;



//Multiplicacion cantidad x precio 2
$pproducto = $_POST["mul1"];
$pproducto2 = $_POST["mul3"];
$pproducto3 = $_POST["mul6"];
$pproducto4 = $_POST["mul8"];
$pproducto5 = $_POST["mul10"];
$pproducto6 = $_POST["mul12"];
$pproducto7 = $_POST["mul13"];
$pproducto8 = $_POST["mul16"];
$pproducto9 = $_POST["mul17"];
$pproducto10 = $_POST["mul19"];
$pproducto11 = $_POST["mul30"];
$pproducto12 = $_POST["mul32"];
$pproducto13 = $_POST["mul34"];
$pproducto14 = $_POST["mul37"];
$pproducto15 = $_POST["mul38"];
$pproducto16 = $_POST["mul40"];




//Total por producto
$oproducto1 = $_POST["ingreso1"];
$oproducto2 = $_POST["ingreso2"];
$oproducto3 = $_POST["ingreso3"];
$oproducto4 = $_POST["ingreso4"];
$oproducto5 = $_POST["ingreso5"];
$oproducto6 = $_POST["ingreso6"];
$oproducto7 = $_POST["ingreso7"];
$oproducto8 = $_POST["ingreso8"];
$oproducto9 = $_POST["ingreso9"];
$oproducto10 = $_POST["ingreso10"];

//6 mas
$oproducto11 = $_POST["ingreso11"];
$oproducto12 = $_POST["ingreso12"];
$oproducto13 = $_POST["ingreso13"];
$oproducto14 = $_POST["ingreso14"];
$oproducto15 = $_POST["ingreso15"];
$oproducto16 = $_POST["ingreso16"];


//Stocks
$Stock1 = $_POST["cantidad1"];
$Stock2 = $_POST["cantidad2"];
$Stock3 = $_POST["cantidad3"];
$Stock4 = $_POST["cantidad4"];
$Stock5 = $_POST["cantidad5"];
$Stock6 = $_POST["cantidad6"];
$Stock7 = $_POST["cantidad7"];
$Stock8 = $_POST["cantidad8"];
$Stock9 = $_POST["cantidad9"];
$Stock10 = $_POST["cantidad10"];

//6 mas
$Stock11 = $_POST["cantidad11"];
$Stock12 = $_POST["cantidad12"];
$Stock13 = $_POST["cantidad13"];
$Stock14 = $_POST["cantidad14"];
$Stock15 = $_POST["cantidad15"];
$Stock16 = $_POST["cantidad16"];

//ref.
$id1 = $_POST["id1"];
$id2 = $_POST["id2"];
$id3 = $_POST["id3"];
$id4 = $_POST["id4"];
$id5 = $_POST["id5"];
$id6 = $_POST["id6"];
$id7 = $_POST["id7"];
$id8 = $_POST["id8"];
$id9 = $_POST["id9"];
$id10 = $_POST["id10"];

//6 mas
$id11 = $_POST["id11"];
$id12 = $_POST["id12"];
$id13 = $_POST["id13"];
$id14 = $_POST["id14"];
$id15 = $_POST["id15"];
$id16 = $_POST["id16"];


if ($id1 == null) {
	$id1 = "";
}
if ($id2 == null) {
	$id2 = "";
}
if ($id3 == null) {
	$id3 = "";
}
if ($id4 == null) {
	$id4 = "";
}
if ($id5 == null) {
	$id5 = "";
}
if ($id6 == null) {
	$id6 = "";
}
if ($id7 == null) {
	$id7 = "";
}
if ($id8 == null) {
	$id8 = "";
}
if ($id9 == null) {
	$id9 = "";
}
if ($id10 == null) {
	$id10 = "";
}

//6 mas
if ($id11 == null) {
	$id11 = "";
}
if ($id12 == null) {
	$id12 = "";
}
if ($id13 == null) {
	$id13 = "";
}
if ($id14 == null) {
	$id14 = "";
}
if ($id15 == null) {
	$id15 = "";
}
if ($id16 == null) {
	$id16 = "";
}




//mPDF, dependencia desde composer
require_once('../../vendor/autoload.php');
//Plantilla HTML
require('../../pdfrecibo/index.php');
//CSS plantilla
$css = file_get_contents('../../pdfrecibo/style.css');
$mpdf = new \Mpdf\Mpdf([
	'mode' => 'utf-8', 'format' => [220, 280], 'margin_top' => 0,
	'margin_left' => 7,
	'margin_right' => 7,
	'mirrorMargins' => true
]);
if ($producto == 'Ninguno') {
	$producto = "";
}
if ($cproducto == null) {
	$cproducto = "";
}
if ($producto2 == 'Ninguno') {
	$producto2 = "";
}
if ($cproducto2 == null) {
	$cproducto2 = "";
}
if ($producto3 == 'Ninguno') {
	$producto3 = "";
}
if ($cproducto3 == null) {
	$cproducto3 = "";
}
if ($producto4 == 'Ninguno') {
	$producto4 = "";
}
if ($cproducto4 == null) {
	$cproducto4 = "";
}
if ($producto5 == 'Ninguno') {
	$producto5 = "";
}
if ($cproducto5 == null) {
	$cproducto5 = "";
}
if ($producto6 == 'Ninguno') {
	$producto6 = "";
}
if ($cproducto6 == null) {
	$cproducto6 = "";
}
if ($producto7 == 'Ninguno') {
	$producto7 = "";
}
if ($cproducto7 == null) {
	$cproducto7 = "";
}
if ($producto8 == 'Ninguno') {
	$producto8 = "";
}
if ($cproducto8 == null) {
	$cproducto8 = "";
}
if ($producto9 == 'Ninguno') {
	$producto9 = "";
}
if ($cproducto9 == null) {
	$cproducto9 = "";
}
if ($producto10 == 'Ninguno') {
	$producto10 = "";
}
if ($cproducto10 == null) {
	$cproducto10 = "";
}
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
if ($producto11 == 'Ninguno') {
	$producto11 = "";
}
if ($producto12 == 'Ninguno') {
	$producto12 = "";
}
if ($producto13 == 'Ninguno') {
	$producto13 = "";
}
if ($producto14 == 'Ninguno') {
	$producto14 = "";
}
if ($producto15 == 'Ninguno') {
	$producto15 = "";
}
if ($producto16 == 'Ninguno') {
	$producto16 = "";
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


$cliente = $_POST["cliente"];
if ($cliente == 'Ninguno') {
	$clientenombre = $_POST["nombre_no_registrado"];
	$identificacion = 'Desconocido';
	$estudio = 'Desconocido';
	$telefono = 'Desconocido';
	$direccion = 'Desconocido';
	$ciudad = 'Desconocido';
	$email = $_POST["identificacion_no_registrado"];
} else {
	$clientenombre = $_POST["nombre"];
	$identificacion = $_POST["cliente"];
	$estudio = $_POST["estudio"];
	$telefono = $_POST["telefono"];
	$direccion = $_POST["direccion"];
	$ciudad = $_POST["ciudad"];
	$email = $_POST["email"];
}

$pago = $_POST["metodo_pago"];
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

$total = $_POST["resultado"];
$metodo_pago = $_POST["metodo_pago"];
$fecha = $_POST["fecha"];
$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
//COREEO INICIO
 //Capturar datos del formulario en variables
//ARCHIVOS
$archivo = $mpdf->Output('', "S");
$mpdf->Output('C_Cobro_' . $id . '.pdf', "I");

