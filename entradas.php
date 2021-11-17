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
  <script src="plugins/jquery/jquery.min.js"></script>
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
                  <h2>Entradas</h2>
                </div>

                <div class="card-body">
                  <!-- Contenido wey -->
                  <!-- Button trigger modal -->
                  <!-- Button trigger modal -->
                  <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
                  <br><br>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form role="form" method="post" action="php/entradas/agregarentrada.php">
                            <div class="form-group">
                              <label>Fecha</label>
                              <input type="date" class="form-control" name="fecha" required>
                            </div>

                            <div class="form-group">
                              <select class="selectpicker show-menu-arrow" name="nombre" data-style="form-control" data-live-search="true" title="Proveedor" required>
                                <?php
                                include __DIR__ . '/php/conexion.php';
                                $sql2 = "select * from proveedor";
                                $query1 = $con->query($sql2);
                                ?>


                                <?php if ($query1->num_rows > 0) : ?>
                                  <?php while ($r2 = $query1->fetch_array()) : ?>
                                    <option data-tokens=""><?php echo $r2["nombre"]; ?></option>
                                  <?php endwhile; ?>
                                <?php else : ?>
                                  <option data-tokens="No hay resultados">No hay resultados</option>
                                <?php endif; ?>
                              </select>
                            </div>

                            <div class="form-group">
                              <label>Cantidad</label>
                              <input type="number" class="form-control" name="cantidad">
                            </div>

                            <div class="form-group">
                              <select class="selectpicker show-menu-arrow" name="producto" data-style="form-control" data-live-search="true" title="Producto" required>
                                <?php
                                $sql2 = "select * from productos";
                                $query1 = $con->query($sql2);
                                ?>


                                <?php if ($query1->num_rows > 0) : ?>
                                  <?php while ($r2 = $query1->fetch_array()) : ?>
                                    <option data-tokens=""><?php echo $r2["nombre"]; ?></option>
                                  <?php endwhile; ?>
                                <?php else : ?>

                                <?php endif; ?>
                              </select>
                            </div>


                            <button type="submit" class="btn btn-default">Agregar</button>
                          </form>
                        </div>

                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->

                  <div class="tablacliente" style="overflow-y: scroll;
            overflow-y: hidden;">
                    <?php include "php/entradas/tablaentradas.php"; ?>
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
  <script>
    $(document).ready(function() {
      $('#table_id').DataTable({
        responsive: true,
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
          },
        },

        dom: 'Blfrtip',
        lengthMenu: [
          [10, 25, 50, -1],
          ['10 Filas', '25 Filas', '50 Filas', 'Mostrar todo']
        ],
        buttons: [
          'pdfHtml5'
        ]

      });
      $('.selectpicker').selectpicker({
        style: 'btn-default'
      });
    });
  </script>
</body>

</html>