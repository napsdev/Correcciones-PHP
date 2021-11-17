<?php
include __DIR__ . '/../conexion.php';
$user_id = null;
$sql1 = "select * from productos where id = " ."'".$_GET["id"]."'";
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

  <form role="form" method="post" action="php/productos/actualizar.php">
    <div class="form-group">
      <label>Nombre</label>
      <input type="text" class="form-control" name="nombre" value="<?php echo $person->nombre; ?>">
    </div>

    <div class="form-group">
      <select class="selectpicker show-menu-arrow" name="proveedor" data-style="form-control" data-live-search="true" title="Proveedor" required>

        <option data-tokens="" selected="true"><?php echo $person->proveedor; ?></option>
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
      <input type="number" class="form-control" name="cantidad" value="<?php echo $person->cantidad; ?>">
    </div>
    <div class="form-group">
      <label>Precio Compra</label>
      <input type="number" class="form-control" name="precio_compra" value="<?php echo $person->precio_compra; ?>">
    </div>
    <div class="form-group">
      <label>Precio Venta</label>
      <input type="number" class="form-control" name="precio_venta" value="<?php echo $person->precio_venta; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $person->id; ?>">
    <button type="submit" class="btn btn-default">Actualizar</button>
  </form>
<?php else : ?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif; ?>