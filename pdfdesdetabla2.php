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



//COREEO INICIO
 //Capturar datos del formulario en variables
//ARCHIVOS
$archivo = $mpdf->Output('', "S");
 $Nombre = 'Sr.Córdoba';
 $Email =$email;
 require("php/salidas/archivosmail/class.phpmailer.php");
 
 $mail = new PHPMailer();

  //*****Datos del servidor SMTP para hacer posible el envio del correo*****
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = '';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';


 //*****Dirección a la que llegaran los mensajes*****
$mail->addReplyTo('', 'Sr Córdoba');
$mail->setFrom('', 'Sr Córdoba');
$mail->addAddress($Email);
 $mail->Subject  =  "Cuenta de cobro";
 
 // Aquí van los datos que apareceran en el correo que se envia
 $mail->WordWrap = 50; 
 $mail->IsHTML(true);     
 $mail->addStringAttachment($archivo, 'C_Cobro_' . $id . '.pdf');
 $mail->Body = "
 <html>
<head>
   <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
   <title>Sr. Córdoba Studio</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
   <style type='text/css'>
   	a {color: #4A72AF;}
	body, #header h1, #header h2, p {margin: 0; padding: 0; font-family: 'Lato', sans-serif;
	font-weight: 300;}
	#main {border: 1px solid #cfcece;}
	img {display: block;}
	#top-message p, #bottom-message p {color: #3f4042; font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
	#header h1 {color: #ffffff !important; font-family: 'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', sans-serif; font-size: 24px; margin-bottom: 0!important; padding-bottom: 0; }
	#header h2 {color: #ffffff !important; font-family: Arial, Helvetica, sans-serif; font-size: 24px; margin-bottom: 0 !important; padding-bottom: 0; }
	#header p {color: #ffffff !important; font-family: 'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', sans-serif; font-size: 12px;  }
	h1, h2, h3, h4, h5, h6 {margin: 0 0 0.8em 0;}
	h3 {font-size: 28px; color: #444444 !important; font-family: 'Lato', sans-serif; font-weight: 300;}
	h4 {font-size: 22px; color: #575756 !important; font-family: 'Lato', sans-serif; font-weight: 300; }
	h5 {font-size: 18px; color: #444444 !important; font-family: 'Lato', sans-serif;  font-weight: 300;	}
	p {font-size: 16px; color: #444444 !important; font-family: 'Lato', sans-serif; ; line-height: 1.5;}
   </style>
</head>

<body>

<table width='100%' cellpadding='0' cellspacing='0' bgcolor='#e4e4e4'><tr><td>


	<table id='main' width='650' align='center' cellpadding='0' cellspacing='15' bgcolor='ffffff'>
		<tr>
			<td>
				<table id='header' cellpadding='10' cellspacing='0' align='center' bgcolor='#F0F0F0'>
					<tr>
						<td width='600'><img src='https://i.ibb.co/mBhp9vM/logo-srcordoba.png' alt='' style='width:250px ; max-width: 300; height: auto; margin: auto; '></td>
					</tr>
				</table><!-- header -->
			</td>
		</tr><!-- header -->
		

		<tr>
			<td>
				<table id='content-6' cellpadding='0' cellspacing='0' align='center'>
					
					<h4 align='center'>".$clientenombre."</h4>
					<h4 align='center'>Gracias por comprar en Sr. Córdoba Studio.</h4>
							<p align='center'>En este correo adjuntamos el comprobante de su compra.</p>
					
					
				</table>
			</td>
		</tr>
		
		<tr>
			<td height='50px'>
			</td>	
		</tr>	
		
		
		<tr>
			<td>
				<table  cellpadding='10' cellspacing='0' align='center' bgcolor='#F0F0F0'>
					<tr>
						<td width='600'>
							<h5 align='center'>Todo lo que necesite en insumos para el arte del tatuaje, </h5>
							<h5 align='center'><strong>CONTÁCTENOS.</strong></h5>
							<h3 align='center'>317 801 1898 - 316 813 0414
							</h3>	
						</td>
					</tr>
				</table>
			<table  cellpadding='0' cellspacing='0'  style='margin: 30px 0px'>
				
				<tr >
					
					<td colspan='2' width='400px' >
					<p>Sr. Córdoba Studio 2021</p>
					<p>Calle 4 # 16-13 Barrio San Pablo - Zipaquirá.</p>
					</td>
					<td width='100px'>
						<a href='https://www.instagram.com/srcordobastudio/' target='_blank'><img src='https://i.ibb.co/CJS7pSc/instagram.png' style='width:30px'></a>
					</td>	
					<td width='100px'>
						<a href='https://www.facebook.com/SrCordobaStudio' target='_blank'><img src='https://i.ibb.co/bs56XBP/facebook.png' style='width:30px'></a>
					</td>
					
					
				</tr>
				
				
			              
					
				</table>
			</td>
		</tr>
				
		
		
	</table><!-- main -->
	

</td></tr></table><!-- wrapper -->

</body>
</html>";
 
 if ($mail->Send()){
	 echo "<script>alert('Enviado!');</script>";
 }else{
	 echo "<script>alert('Error o correo invalido.');</script>";
 }
//CORREO FIN
echo "<script>window.close();</script>"; 



