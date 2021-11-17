<?php
include __DIR__ . '/../conexion.php';

$user_id = null;
$sql1 = "select * from entradas where id = " . $_GET["id"];
$query = $con->query($sql1);
$person = null;
if ($query->num_rows > 0) {
  while ($r = $query->fetch_object()) {
    $person = $r;
    break;
  }
}
?>

<?php if ($person != null) : ?>
  <form role="form" method="post" action="php/entradas/actualizarentrada.php">
    <div class="form-group">
      <label>Fecha</label>
      <input type="text" class="form-control" name="fecha" value="<?php echo $person->fecha; ?>">
    </div>

    <div class="form-group">
      <select class="selectpicker show-menu-arrow" name="nombre" data-style="form-control" data-live-search="true" title="Proveedor" required>

        <option data-tokens="" selected="true"><?php echo $person->nombre; ?></option>
        <?php
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
      <input type="text" class="form-control" name="cantidad" value="<?php echo $person->cantidad; ?>">
    </div>


    <input type="hidden" class="form-control" name="producto" value="<?php echo $person->producto; ?>">
    <input type="hidden" name="id" value="<?php echo $person->id; ?>">
    <button type="submit" class="btn btn-default">Actualizar</button>
  </form>

<?php else : ?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif; ?>