<!DOCTYPE html>
<html lang="es">
<head>

<meta charset=”utf8″ />


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
    <script src="plugins/jquery/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

    <script src="js/app.js"></script>

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


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
                                    <h2>COTIZAR</h2>
                                </div>

                                <div class="card-body">
                                    <!-- Contenido wey -->
                                    <form role="form" method="post" class="formulariosalidas" target="_blank" onsubmit="setTimeout(function () { window.location.reload(); }, 100)" name="factura" id="factura1" action="php/salidas/agregarsalida2.php">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    

                                                    <h4>Clientes</h4>

                                                    <h5>Registrado</h5>
                                                    <div class="form-group">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <select id="getC" class="selectpicker show-menu-arrow" name="cliente" data-style="form-control" data-live-search="true" title="Cliente" style="display: inline;">
                                                                <option data-tokens="" selected value="Ninguno">Ninguno</option>
                                                                <?php
                                                                include __DIR__ . '/php/conexion.php';
                                                                require_once 'php/salidas/conexionPDO.php';

                                                                $stmt = $dbcon->prepare('SELECT * FROM clientes');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $id; ?>"><?php echo $id.'-'.$nombre; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div class="" id="displayc" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>


                                                    <h5>No registrado</h5>
                                                    <div class="form-group">
                                                        <label>Nombre</label>
                                                        <input type="text" class="form-control" name="nombre_no_registrado">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Correo</label>
                                                        <input type="text" class="form-control" name="identificacion_no_registrado">
                                                    </div>



                                                    <h4>Productos</h4>
                                                    <div class="form-group" class="1">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container" name="">
                                                            <label for="nombre_producto">1. </label>
                                                            <select id="getProducts" class="selectpicker show-menu-arrow" name="nombre_producto" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" selected value="Ninguno">Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div class="" id="display" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>

                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso1" onchange="Suma()" readonly value="0">
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="2">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">2. </label>
                                                            <select id="getProducts2" class="selectpicker show-menu-arrow" name="nombre_producto2" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" selected value="Ninguno">Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display2" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso2" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="3">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">3. </label>
                                                            <select id="getProducts3" class="selectpicker show-menu-arrow" name="nombre_producto3" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" selected value="Ninguno">Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display3" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso3" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="4">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">4. </label>
                                                            <select id="getProducts4" class="selectpicker show-menu-arrow" name="nombre_producto4" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" selected value="Ninguno">Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display4" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso4" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="5">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">5. </label>
                                                            <select id="getProducts5" class="selectpicker show-menu-arrow" name="nombre_producto5" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" selected value="Ninguno">Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display5" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso5" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="6">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">6. </label>
                                                            <select id="getProducts6" class="selectpicker show-menu-arrow" name="nombre_producto6" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" selected value="Ninguno">Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display6" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso6" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="7">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">7. </label>
                                                            <select id="getProducts7" class="selectpicker show-menu-arrow" name="nombre_producto7" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" selected value="Ninguno">Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display7" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso7" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="8">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">8. </label>
                                                            <select id="getProducts8" class="selectpicker show-menu-arrow" name="nombre_producto8" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" selected value="Ninguno">Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();
                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display8" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso8" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="9">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">9. </label>
                                                            <select id="getProducts9" class="selectpicker show-menu-arrow" name="nombre_producto9" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" selected value="Ninguno">Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display9" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>

                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso9" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="10">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">10. </label>
                                                            <select id="getProducts10" class="selectpicker show-menu-arrow" name="nombre_producto10" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" value="Ninguno" selected>Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display10" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso10" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>









                                                    <div class="form-group" class="11">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">11. </label>
                                                            <select id="getProducts11" class="selectpicker show-menu-arrow" name="nombre_producto11" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" value="Ninguno" selected>Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display11" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso11" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="12">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">12. </label>
                                                            <select id="getProducts12" class="selectpicker show-menu-arrow" name="nombre_producto12" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" value="Ninguno" selected>Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display12" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso12" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="13">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">13. </label>
                                                            <select id="getProducts13" class="selectpicker show-menu-arrow" name="nombre_producto13" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" value="Ninguno" selected>Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display13" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso13" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="14">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">14. </label>
                                                            <select id="getProducts14" class="selectpicker show-menu-arrow" name="nombre_producto14" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" value="Ninguno" selected>Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display14" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso14" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="15">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">15. </label>
                                                            <select id="getProducts15" class="selectpicker show-menu-arrow" name="nombre_producto15" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" value="Ninguno" selected>Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display15" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso15" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>

                                                    <div class="form-group" class="16">
                                                        <!-- Elemento seleccionado -->
                                                        <div class="container">
                                                            <label for="nombre_producto">16. </label>
                                                            <select id="getProducts16" class="selectpicker show-menu-arrow" name="nombre_producto16" data-style="form-control" data-live-search="true" title="Producto" required style="display: inline;">
                                                                <option data-tokens="" value="Ninguno" selected>Ninguno</option>
                                                                <?php
                                                                $stmt = $dbcon->prepare('SELECT * FROM productos');
                                                                $stmt->execute();

                                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    extract($row);
                                                                ?>
                                                                    <option data-tokens="" value="<?php echo $nombre; ?>"><?php echo $nombre.'_'.$id; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <div id="display16" style="display: inline;">
                                                                <!-- Información del elemento seleccionado -->
                                                            </div>
                                                            <label for="cantidad">Total</label>
                                                            <input type="text" class="form-control bg-dark" style="display: inline; width: 100px;" name="ingreso16" onchange="Suma()" value="0" readonly>
                                                        </div>
                                                        <!-- Elemento seleccionado fin-->
                                                    </div>









                                                    <div class="form-group">
                                                        <label>Total</label>
                                                        <input class="form-control" type="text" name="resultado" readonly value="0">
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="selectpicker show-menu-arrow" name="metodo_pago" data-style="form-control" data-live-search="true" title="Metodo de pago" required>
                                                            <option data-tokens="">Giro</option>
                                                            <option data-tokens="">PayU</option>
                                                            <option data-tokens="">DaviPlata</option>
                                                            <option data-tokens="">Nequi</option>
                                                            <option data-tokens="">Transferencia</option>
                                                            <option data-tokens="" selected>Efectivo</option>
                                                        </select>
                                                    </div>
                                                        
                                                        
                                                        

                                                    <div class="form-group">
                                                        <label>Fecha</label>
                                                        <input type="date" class="form-control" name="fecha" required>
                                                    </div>

                                                    <button type="submit" id="miboton" class="btn btn-primary">Cotizar</button>

                                    </form>
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
    <script>
        $(document).ready(function() {
            $('#resultado').mask("#,##0", {
                reverse: true
            });
            $('.selectpicker').selectpicker({
                style: 'btn-default'
            });
        });
    </script>
</body>

</html>