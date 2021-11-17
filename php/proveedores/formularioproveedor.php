<?php
include __DIR__ . '/../conexion.php';

$user_id = null;
$sql1 = "select * from proveedor where id = " ."'". $_GET["id"]."'";
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
  <form role="form" method="post" action="php/proveedores/actualizarproveedor.php">

    <div class="form-group">
      <label>Nombre</label>
      <input type="text" class="form-control" name="nombre" value="<?php echo $person->nombre; ?>">
    </div>
    <div class="form-group">
      <label>Contacto</label>
      <input type="text" class="form-control" name="contacto" value="<?php echo $person->contacto; ?>">
    </div>
    <div class="form-group">
      <label>Teléfono</label>
      <input type="text" class="form-control" name="telefono" value="<?php echo $person->telefono; ?>">
    </div>
    <div class="form-group">
      <label>Ciudad</label>
      <input type="text" class="form-control" name="ciudad" value="<?php echo $person->ciudad; ?>">
    </div>

    <input type="hidden" name="id" value="<?php echo $person->id; ?>">
    <button type="submit" class="btn btn-default">Actualizar</button>
  </form>

<?php else : ?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif; ?>