<?php
function llamarplantilla(
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
) {

  if ($pproducto == 0 || $pproducto == null) {
    $pproducto = "";
  } else {
    $pproducto = "$" . $pproducto;
  }
  if ($pproducto2 == 0 || $pproducto == null) {
    $pproducto2 = "";
  } else {
    $pproducto2 = "$" . $pproducto2;
  }
  if ($pproducto3 == 0 || $pproducto == null) {
    $pproducto3 = "";
  } else {
    $pproducto3 = "$" . $pproducto3;
  }
  if ($pproducto4 == 0 || $pproducto == null) {
    $pproducto4 = "";
  } else {
    $pproducto4 = "$" . $pproducto4;
  }
  if ($pproducto5 == 0 || $pproducto == null) {
    $pproducto5 = "";
  } else {
    $pproducto5 = "$" . $pproducto5;
  }
  if ($pproducto6 == 0 || $pproducto == null) {
    $pproducto6 = "";
  } else {
    $pproducto6 = "$" . $pproducto6;
  }
  if ($pproducto7 == 0 || $pproducto == null) {
    $pproducto7 = "";
  } else {
    $pproducto7 = "$" . $pproducto7;
  }
  if ($pproducto8 == 0 || $pproducto == null) {
    $pproducto8 = "";
  } else {
    $pproducto8 = "$" . $pproducto8;
  }
  if ($pproducto9 == 0 || $pproducto == null) {
    $pproducto9 = "";
  } else {
    $pproducto9 = "$" . $pproducto9;
  }
  if ($pproducto10 == 0 || $pproducto == null) {
    $pproducto10 = "";
  } else {
    $pproducto10 = "$" . $pproducto10;
  }

  //6 mas
  if ($pproducto11 == 0 || $pproducto == null) {
    $pproducto11 = "";
  } else {
    $pproducto11 = "$" . $pproducto11;
  }
  if ($pproducto12 == 0 || $pproducto == null) {
    $pproducto12 = "";
  } else {
    $pproducto12 = "$" . $pproducto12;
  }
  if ($pproducto13 == 0 || $pproducto == null) {
    $pproducto13 = "";
  } else {
    $pproducto13 = "$" . $pproducto13;
  }
  if ($pproducto14 == 0 || $pproducto == null) {
    $pproducto14 = "";
  } else {
    $pproducto14 = "$" . $pproducto14;
  }
  if ($pproducto15 == 0 || $pproducto == null) {
    $pproducto15 = "";
  } else {
    $pproducto15 = "$" . $pproducto15;
  }
  if ($pproducto16 == 0 || $pproducto == null) {
    $pproducto16 = "";
  } else {
    $pproducto16 = "$" . $pproducto16;
  }





  if ($oproducto1 == 0) {
    $oproducto1 = "";
  } else {
    $oproducto1 = "$" . $oproducto1;
  }
  if ($oproducto2 == 0) {
    $oproducto2 = "";
  } else {
    $oproducto2 = "$" . $oproducto2;
  }
  if ($oproducto3 == 0) {
    $oproducto3 = "";
  } else {
    $oproducto3 = "$" . $oproducto3;
  }
  if ($oproducto4 == 0) {
    $oproducto4 = "";
  } else {
    $oproducto4 = "$" . $oproducto4;
  }
  if ($oproducto5 == 0) {
    $oproducto5 = "";
  } else {
    $oproducto5 = "$" . $oproducto5;
  }
  if ($oproducto6 == 0) {
    $oproducto6 = "";
  } else {
    $oproducto6 = "$" . $oproducto6;
  }
  if ($oproducto7 == 0) {
    $oproducto7 = "";
  } else {
    $oproducto7 = "$" . $oproducto7;
  }
  if ($oproducto8 == 0) {
    $oproducto8 = "";
  } else {
    $oproducto8 = "$" . $oproducto8;
  }
  if ($oproducto9 == 0) {
    $oproducto9 = "";
  } else {
    $oproducto9 = "$" . $oproducto9;
  }
  if ($oproducto10 == 0) {
    $oproducto10 = "";
  } else {
    $oproducto10 = "$" . $oproducto10;
  }


  if ($oproducto11 == 0) {
    $oproducto11 = "";
  } else {
    $oproducto11 = "$" . $oproducto11;
  }
  if ($oproducto12 == 0) {
    $oproducto12 = "";
  } else {
    $oproducto12 = "$" . $oproducto12;
  }
  if ($oproducto13 == 0) {
    $oproducto13 = "";
  } else {
    $oproducto13 = "$" . $oproducto13;
  }
  if ($oproducto14 == 0) {
    $oproducto14 = "";
  } else {
    $oproducto14 = "$" . $oproducto14;
  }
  if ($oproducto15 == 0) {
    $oproducto15 = "";
  } else {
    $oproducto15 = "$" . $oproducto15;
  }
  if ($oproducto16 == 0) {
    $oproducto16 = "";
  } else {
    $oproducto16 = "$" . $oproducto16;
  }


  $plantilla = '<body>
<link rel="stylesheet" href="style.css">
 
<div class="caja-recibo">	
 <header class="clearfix">
     
 
    <div id="logo"   style="width:250px; 
    text-align: left;
    margin-bottom: 40px;
    float: left;">
       <img src="php/salidas/logo_srcordoba.svg">
     </div>
 
 
   <div id="info">
     
     <strong style="font-size: 18px;">Sr. Córdoba Studio</strong><br>
     Calle 4 # 16-13 Barrio SanPablo - Zipaquirá<br>
     Cel: 317 801 1898 - 316 813 0414<br>
     Tel: +57 1 881 0346<br>
   <a href="mailto:info@srcordobastudio.com">info@srcordobastudio.com</a> </div> 
   
    <div id="number"> Cuenta de cobro: <br>
     <strong style="color: #E30613; " >No. ' . $id . '</strong><br>
     No responsable de IVA
   </div>		
     <div id="project">
   <div id="colone">  
       <div><span>Cliente</span>   ' . $clientenombre . ' </div>
       <div><span>ID</span>   ' . $telefono . '</div>
       <div><span>Teléfono</span>   ' . $identificacion . ' </div>
       <div><span>Email</span>   ' . $email . '</div>
       <div><span>Pago</span>   ' . $pago . '</div>
   </div>
   <div id="coltwo">  
       <div><span>Estudio</span>   ' . $estudio . ' </div>
       <div><span>Dirección</span>   ' . $direccion . ' </div>
       <div><span>Ciudad</span>   ' . $ciudad . '</div>
       <div><span>Fecha</span>   ' . $fecha . '</div>
   </div>  
     </div>
   </header>
   <main>
   <table>
   <thead>
     <tr>
       <th>Ref.</th>
       <th>Und.</th>  
       <th>Descripción</th>
       <th>Precio Und.</th>
       <th>Total</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td class="reference">' . $id1 . '</td>
       <td class="qty">' . $cproducto . '</td>
       <td class="service">' . $producto . '</td>
       <td class="unit">' . $pproducto . '</td>
       <td class="total">' . $oproducto1 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id2 . '</td>
       <td class="qty">' . $cproducto2 . '</td>
       <td class="service">' . $producto2 . '</td>
       <td class="unit">' . $pproducto2 . '</td>
       <td class="total">' . $oproducto2 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id3 . '</td>
       <td class="qty">' . $cproducto3 . '</td>
       <td class="service">' . $producto3 . '</td>
       <td class="unit">' . $pproducto3 . '</td>
       <td class="total">' . $oproducto3 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id4 . '</td>
       <td class="qty">' . $cproducto4 . '</td>
       <td class="service">' . $producto4 . '</td>
       <td class="unit">' . $pproducto4 . '</td>
       <td class="total">' . $oproducto4 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id5 . '</td>
       <td class="qty">' . $cproducto5 . '</td>
       <td class="service">' . $producto5 . '</td>
       <td class="unit">' . $pproducto5 . '</td>
       <td class="total">' . $oproducto5 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id6 . '</td>
       <td class="qty">' . $cproducto6 . '</td>
       <td class="service">' . $producto6 . '</td>
       <td class="unit">' . $pproducto6 . '</td>
       <td class="total">' . $oproducto6 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id7 . '</td>
       <td class="qty">' . $cproducto7 . '</td>
       <td class="service">' . $producto7 . '</td>
       <td class="unit">' . $pproducto7 . '</td>
       <td class="total">' . $oproducto7 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id8 . '</td>
       <td class="qty">' . $cproducto8 . '</td>
       <td class="service">' . $producto8 . '</td>
       <td class="unit">' . $pproducto8 . '</td>
       <td class="total">' . $oproducto8 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id9 . '</td>
       <td class="qty">' . $cproducto9 . '</td>
       <td class="service">' . $producto9 . '</td>
       <td class="unit">' . $pproducto9 . '</td>
       <td class="total">' . $oproducto9 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id10 . '</td>
       <td class="qty">' . $cproducto10 . '</td>
       <td class="service">' . $producto10 . '</td>
       <td class="unit">' . $pproducto10 . '</td>
       <td class="total">' . $oproducto10 . '</td>
     </tr>
      



     <tr>
       <td class="reference">' . $id11 . '</td>
       <td class="qty">' . $cproducto11 . '</td>
       <td class="service">' . $producto11 . '</td>
       <td class="unit">' . $pproducto11 . '</td>
       <td class="total">' . $oproducto11 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id12 . '</td>
       <td class="qty">' . $cproducto12 . '</td>
       <td class="service">' . $producto12 . '</td>
       <td class="unit">' . $pproducto12 . '</td>
       <td class="total">' . $oproducto12 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id13 . '</td>
       <td class="qty">' . $cproducto13 . '</td>
       <td class="service">' . $producto13 . '</td>
       <td class="unit">' . $pproducto13 . '</td>
       <td class="total">' . $oproducto13 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id14 . '</td>
       <td class="qty">' . $cproducto14 . '</td>
       <td class="service">' . $producto14 . '</td>
       <td class="unit">' . $pproducto14 . '</td>
       <td class="total">' . $oproducto14 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id15 . '</td>
       <td class="qty">' . $cproducto15 . '</td>
       <td class="service">' . $producto15 . '</td>
       <td class="unit">' . $pproducto15 . '</td>
       <td class="total">' . $oproducto15 . '</td>
     </tr>
     <tr>
       <td class="reference">' . $id16 . '</td>
       <td class="qty">' . $cproducto16 . '</td>
       <td class="service">' . $producto16 . '</td>
       <td class="unit">' . $pproducto16 . '</td>
       <td class="total">' . $oproducto16 . '</td>
     </tr>


     <tr>
       <td colspan="5" class="grand total">TOTAL  $' . $total . '</td>
     </tr>

   </tbody>	
 </table>
  </main>
  </div>
 <footer>
   Por Expresa disposición del articulo 616-2 del estatuto tributario,<br>
   los responsables del regimen simplicado no están en la obligación de expedir factura de venta.<br>
   Sr. Córdoba Studio, 2021
 </footer>	
 </body>
';
  return ($plantilla);
};
