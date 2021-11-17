<?php
include __DIR__ . '/../conexion.php';
$año='2021';

$sql1 = "SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas`";
$query = $con->query($sql1);
?>

<?php
while ($r = $query->fetch_array()) :
    ?>
    <h3>Total ventas</h3>
    <?php echo number_format($r["total"]); ?>
    <?php endwhile; ?>

<?php


//ABRIL
$sql1 = "SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-04%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$t04 = $r["total"];
endwhile;
//MAYO
$sql1 = "SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-05%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$t05 = $r["total"];
 endwhile;
//Junio
$sql1 = "SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-06%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$t06 = $r["total"];
 endwhile;
//Julio
$sql1 = "SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-07%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$t07 = $r["total"];
 endwhile; 
//Agosto
$sql1 = "SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-08%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$t08 = $r["total"];
endwhile;
//Septiembre
$sql1 = "SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-09%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$t09 = $r["total"];
 endwhile; 
//Octubre
$sql1 = "SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-10%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$t10 = $r["total"];
 endwhile; 
//Noviembre
$sql1 = "SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-11%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$t11 = $r["total"];
endwhile; 
//Diciembre
$sql1 = "SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-12%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$t12 = $r["total"];
endwhile; ?>




<canvas id="grafica" width="400" height="100"></canvas>
<script>
// Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X. 
const etiquetas = ["Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosVentas2020 = {
    label: "Ventas por mes",
    data: [<?php echo $t04;?>, <?php echo $t05;?>, <?php echo $t06;?>, <?php echo $t07;?>, <?php echo $t08;?> ,<?php echo $t09;?>, <?php echo $t10;?>, <?php echo $t11;?>, <?php echo $t12;?>], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
new Chart($grafica, {
    type: 'line',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});
</script>
<?php
//GANANCIA
include __DIR__ . '/../conexion.php';
$año='2021';
$sql1 = "SELECT SUM(ganancia) AS total FROM `salidas`";
$query = $con->query($sql1);
?>

<?php
while ($r = $query->fetch_array()) :
    ?>
    <h3>Total ganancias</h3>
    <?php echo number_format($r["total"]); ?>
    <?php endwhile; ?>
<?php




//MAYO
$sql1 = "SELECT SUM(ganancia) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-05%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g1 = $r["total"];
endwhile;

    
$sql1 = "SELECT SUM(valor) AS total FROM `gastos` WHERE fecha LIKE '%".$año."-05%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g2=$r["total"];
endwhile;
$t05 = $g1-$g2;



//Junio
$sql1 = "SELECT SUM(ganancia) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-06%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g1 = $r["total"];
endwhile;

    
$sql1 = "SELECT SUM(valor) AS total FROM `gastos` WHERE fecha LIKE '%".$año."-06%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g2=$r["total"];
endwhile;
$t06 = $g1-$g2;


//Julio
$sql1 = "SELECT SUM(ganancia) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-07%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g1 = $r["total"];
endwhile;

    
$sql1 = "SELECT SUM(valor) AS total FROM `gastos` WHERE fecha LIKE '%".$año."-07%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g2=$r["total"];
endwhile;
$t07 = $g1-$g2;


//Agosto
$sql1 = "SELECT SUM(ganancia) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-08%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g1 = $r["total"];
endwhile;

    
$sql1 = "SELECT SUM(valor) AS total FROM `gastos` WHERE fecha LIKE '%".$año."-08%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g2=$r["total"];
endwhile;
$t08 = $g1-$g2;


//Septiembre
$sql1 = "SELECT SUM(ganancia) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-09%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g1 = $r["total"];
endwhile;

    
$sql1 = "SELECT SUM(valor) AS total FROM `gastos` WHERE fecha LIKE '%".$año."-09%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g2=$r["total"];
endwhile;
$t09 = $g1-$g2;


//Octubre
$sql1 = "SELECT SUM(ganancia) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-10%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g1 = $r["total"];
endwhile;

    
$sql1 = "SELECT SUM(valor) AS total FROM `gastos` WHERE fecha LIKE '%".$año."-10%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g2=$r["total"];
endwhile;
$t10 = $g1-$g2;


//Noviembre
$sql1 = "SELECT SUM(ganancia) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-11%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g1 = $r["total"];
endwhile;

    
$sql1 = "SELECT SUM(valor) AS total FROM `gastos` WHERE fecha LIKE '%".$año."-11%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g2=$r["total"];
endwhile;
$t11 = $g1-$g2;


//Diciembre
$sql1 = "SELECT SUM(ganancia) AS total FROM `salidas` WHERE fecha LIKE '%".$año."-12%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g1 = $r["total"];
endwhile;

    
$sql1 = "SELECT SUM(valor) AS total FROM `gastos` WHERE fecha LIKE '%".$año."-12%'";
$query = $con->query($sql1);
while ($r = $query->fetch_array()) :
$g2=$r["total"];
endwhile;
$t12 = $g1-$g2;
?>


<canvas id="grafica2" width="400" height="100"></canvas>
<script>
// Obtener una referencia al elemento canvas del DOM
const $grafica2 = document.querySelector("#grafica2");
// Las etiquetas son las que van en el eje X. 
const etiquetas2 = [ "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosVentas20202 = {
    label: "Ganancias por mes",
    data: [ <?php echo $t05;?>, <?php echo $t06;?>, <?php echo $t07;?>, <?php echo $t08;?> ,<?php echo $t09;?>, <?php echo $t10;?>, <?php echo $t11;?>, <?php echo $t12;?>], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(0, 187, 45, 0.2)', // Color de fondo
    borderColor: 'rgba(0, 187, 45, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
new Chart($grafica2, {
    type: 'line',// Tipo de gráfica
    data: {
        labels: etiquetas2,
        datasets: [
            datosVentas20202,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});
</script>