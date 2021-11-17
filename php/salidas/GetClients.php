<?php
include('conexionPDO.php');
$action = $_REQUEST['action'];
//Listar todos los clientes (no se esta trabajando)
if ($action == "showAll") {
    $stmt = $dbcon->prepare('SELECT nombre, estudio, ciudad, telefono, direccion, email FROM clientes ORDER BY nombre');
    $stmt->execute();
} else {

    $stmt = $dbcon->prepare('SELECT nombre, estudio, ciudad, telefono, direccion, email FROM clientes WHERE id=:cid ORDER BY id');
    $stmt->execute(array(':cid' => $action));
}

?>

<?php
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
?>
        <br>
        <label for="precio_venta">Nombre</label>
        <input type="text" class="form-control" name="nombre"  value="<?php echo $nombre; ?>" readonly>
        <label for="precio_venta">Estudio</label>
        <input type="text" class="form-control" name="estudio"  value="<?php echo $estudio; ?>" readonly>
        <label for="cantidad">Email</label>
        <input type="text" class="form-control" name="email"  value="<?php echo $email; ?>" readonly>
        <label for="cantidad">Ciudad</label>
        <input type="text" class="form-control" name="ciudad"  value="<?php echo $ciudad; ?>" readonly>
        <label for="cantidad">Dirección</label>
        <input type="text" class="form-control" name="direccion"  value="<?php echo $direccion; ?>" readonly>
       
        <input type="hidden" class="form-control" name="telefono"  value="<?php echo $telefono; ?>" readonly>

    <?php
    }
} else {
    ?>

<?php
}


?>