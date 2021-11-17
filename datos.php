<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sr. Córdoba Studio</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
  <!-- jQuery -->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <script src="plugins/jquery/jquery.min.js"></script>


  <!-- Graficas -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.js"></script>

  <script src="js/app.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

  <script src="js/app3.js"></script>
  <script src="js/app2.js"></script>
  <link rel="stylesheet" href="/css/grafs.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/IMG/logo.png" alt="Logo">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <?php include "php/navbar.php"; ?>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Main content -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Sr. Córdoba Studio</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <section class="content">
        <div class="container-fluid">




          <div class="row">
            <div class="col-md-12">

              <div class="card">
                <div class="card-header">
                  <h2>Datos</h2>
                </div>

                <div class="card-body">
                  <!-- Contenido wey -->

                <!--Graficas-->
                <div class="grafs"  style="overflow-y: scroll;
                    overflow-y: hidden;">
                <div class="grafs2">
                <?php include "php/salidas/cuentas.php"; ?>
                </div>
                </div>
                <!--Graficas-->
        

        <h5>Ventas por día</h5>
        <h6> Hoy <?php
            include __DIR__ . '/php/conexion.php';
            require_once 'php/salidas/conexionPDO.php';
            $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha = (SELECT fecha FROM salidas ORDER BY fecha DESC LIMIT 1)");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo number_format($total);
            }
            ?></h6>
            <div class="form-group">
                <!-- Elemento seleccionado -->
                <div class="container2">
                      <select id="getC2" class="selectpicker show-menu-arrow" name="cliente" data-style="form-control" data-live-search="true" title="Fecha" style="display: inline;">
                        
                        <?php
                        
                        
                        $stmt = $dbcon->prepare('SELECT DISTINCT fecha FROM salidas ORDER BY fecha DESC');
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);
                        ?>
                            <option data-tokens="" value="<?php echo $fecha; ?>"><?php echo $fecha; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <div class="" id="displayc2" style="display: inline;">
                        <!-- Información del elemento seleccionado -->
                    </div>
                </div>
                <!-- Elemento seleccionado fin-->
            </div>

            <h5>Ganancias por día</h5>
            <h6> Hoy <?php
            $stmt = $dbcon->prepare("SELECT SUM(ganancia) AS total FROM salidas WHERE fecha = (SELECT fecha FROM salidas ORDER BY fecha DESC LIMIT 1)");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo number_format($total);
            }
            ?></h6>
           
            <div class="form-group">
                <!-- Elemento seleccionado -->
                <div class="container2">
                      <select id="getC5" class="selectpicker show-menu-arrow" name="cliente" data-style="form-control" data-live-search="true" title="Fecha" style="display: inline;">
                        
                        <?php
                        include __DIR__ . '/php/conexion.php';
                        require_once 'php/salidas/conexionPDO.php';
                        $stmt = $dbcon->prepare('SELECT DISTINCT fecha FROM salidas ORDER BY fecha DESC');
                        $stmt->execute();

                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);
                        ?>
                            <option data-tokens="" value="<?php echo $fecha; ?>"><?php echo $fecha; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <div class="" id="displayc5" style="display: inline;">
                        <!-- Información del elemento seleccionado -->
                    </div>
                </div>
                <!-- Elemento seleccionado fin-->
            </div>

            <h5>Metodos de pago</h5>

                <div  style="overflow-y: scroll;
                    overflow-y: hidden;">
                <table class="table">
                <thead>
                    <?php 
                    $año='2021';
                    ?>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Efectivo</th>
                    <th scope="col">Transferencia</th>
                    <th scope="col">Nequi</th>
                    <th scope="col">DaviPlata</th>
                    <th scope="col">PayU</th>
                    <th scope="col">Giro</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Abril</th>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-04%' AND metodo_pago = 'Efectivo'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-04%' AND metodo_pago = 'Transferencia'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-04%' AND metodo_pago = 'Nequi'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-04%' AND metodo_pago = 'DaviPlata'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-04%' AND metodo_pago = 'PayU'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-04%' AND metodo_pago = 'Giro'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    </tr>
                    <tr>
                    <th>Mayo</th>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-05%' AND metodo_pago = 'Efectivo'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-05%' AND metodo_pago = 'Transferencia'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-05%' AND metodo_pago = 'Nequi'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-05%' AND metodo_pago = 'DaviPlata'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-05%' AND metodo_pago = 'PayU'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-05%' AND metodo_pago = 'Giro'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    </tr>
                    <tr>
                    <th>Junio</th>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-06%' AND metodo_pago = 'Efectivo'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-06%' AND metodo_pago = 'Transferencia'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-06%' AND metodo_pago = 'Nequi'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-06%' AND metodo_pago = 'DaviPlata'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-06%' AND metodo_pago = 'PayU'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-06%' AND metodo_pago = 'Giro'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    </tr>
                    <tr>
                    <th>Julio</th>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-07%' AND metodo_pago = 'Efectivo'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-07%' AND metodo_pago = 'Transferencia'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-07%' AND metodo_pago = 'Nequi'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-07%' AND metodo_pago = 'DaviPlata'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-07%' AND metodo_pago = 'PayU'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-07%' AND metodo_pago = 'Giro'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    </tr>
                    <tr>
                    <th>Agosto</th>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-08%' AND metodo_pago = 'Efectivo'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-08%' AND metodo_pago = 'Transferencia'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-08%' AND metodo_pago = 'Nequi'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-08%' AND metodo_pago = 'DaviPlata'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-08%' AND metodo_pago = 'PayU'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-08%' AND metodo_pago = 'Giro'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    </tr>
                    <tr>
                    <th>Septiembre</th>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-09%' AND metodo_pago = 'Efectivo'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-09%' AND metodo_pago = 'Transferencia'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-09%' AND metodo_pago = 'Nequi'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-09%' AND metodo_pago = 'DaviPlata'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-09%' AND metodo_pago = 'PayU'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-09%' AND metodo_pago = 'Giro'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    </tr>
                    <tr>
                    <th>Octubre</th>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-10%' AND metodo_pago = 'Efectivo'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-10%' AND metodo_pago = 'Transferencia'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-10%' AND metodo_pago = 'Nequi'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-10%' AND metodo_pago = 'DaviPlata'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-10%' AND metodo_pago = 'PayU'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-10%' AND metodo_pago = 'Giro'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    </tr>
                    <tr>
                    <th>Noviembre</th>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-11%' AND metodo_pago = 'Efectivo'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-11%' AND metodo_pago = 'Transferencia'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-11%' AND metodo_pago = 'Nequi'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-11%' AND metodo_pago = 'DaviPlata'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-11%' AND metodo_pago = 'PayU'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-11%' AND metodo_pago = 'Giro'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    </tr>
                    <tr>
                    <th>Diciembre</th>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-12%' AND metodo_pago = 'Efectivo'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-12%' AND metodo_pago = 'Transferencia'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-12%' AND metodo_pago = 'Nequi'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-12%' AND metodo_pago = 'DaviPlata'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-12%' AND metodo_pago = 'PayU'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    <td><?php $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM salidas WHERE fecha LIKE '%".$año."-12%' AND metodo_pago = 'Giro'");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo number_format($total);
                    }
                    ?></td>
                    </tr>
                </tbody>
                </table>
                </div>



                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/. container-fluid -->
      </section>
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- DATATABLES JS -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  
 

</body>

</html>