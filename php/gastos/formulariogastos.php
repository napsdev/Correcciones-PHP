<?php
include __DIR__ . '/../conexion.php';

$user_id = null;
$sql1 = "select * from gastos where id = " ."'". $_GET["id"]."'";
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
  <form role="form" method="post" action="php/gastos/actualizargastos.php">

    <div class="form-group">
      <label>Descripción</label>
      <input type="text" class="form-control" name="des" value="<?php echo $person->descripcion; ?>">
    </div>

    <div class="form-group">
      <label>Fecha</label>
      <input type="date" class="form-control" name="fecha" value="<?php echo $person->fecha; ?>">
    </div>

    <div class="form-group">
      <label>Valor</label>
      <input type="number" class="form-control" name="val" value="<?php echo $person->valor; ?>">
    </div>

    <input type="hidden" name="id" value="<?php echo $person->id; ?>">
    <button type="submit" class="btn btn-default">Actualizar</button>
  </form>

<?php else : ?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif; ?>