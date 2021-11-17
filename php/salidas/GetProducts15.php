<?php
include('conexionPDO.php');
$action = $_REQUEST['action'];
//Listar todos los productos (no se esta trabajando)
if ($action == "showAll") {
  $stmt = $dbcon->prepare('SELECT nombre, precio_venta, id, cantidad, ganancia FROM productos ORDER BY nombre');
  $stmt->execute();
} else {
  $stmt = $dbcon->prepare('SELECT nombre, precio_venta, id, cantidad, ganancia FROM productos WHERE nombre=:cid ORDER BY nombre');
  $stmt->execute(array(':cid' => $action));
}

?>

<?php
if ($stmt->rowCount() > 0) {

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
?>
    <br>
    <label for="precio_venta">Ref.</label>
    <input type="text" class="form-control" name="id15"  value="<?php echo $id; ?>" readonly>
    <label for="precio_venta">Precio venta</label>
    <input type="number" class="form-control" name="mul38" onchange="mult15()"  value="<?php echo $precio_venta; ?>" readonly>
    <label for="precio_venta">Stock</label>
    <input type="number" class="form-control" name="cantidad15"  value="<?php echo $cantidad; ?>" readonly>
    <label for="cantidad">Cantidad</label>
    <input type="number" class="form-control bg-dark" name="mul39"  onchange="mult15()" value="0">
    <input type="hidden" class="form-control bg-dark" name="ganac15"  value="<?php echo $ganancia; ?>" readonly>
    <br>
    
    <script>
      document.factura.ingreso15.value = 0;
      Suma();
    </script>

  <?php
  }
} else {
  ?>
  <script>
    document.factura.ingreso15.value = 0;
    Suma();
  </script>

<?php
}


?>