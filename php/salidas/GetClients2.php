<?php
header('Content-Type: text/html; charset=UTF-8');
include('conexionPDO.php');
$action = $_REQUEST['action'];
//Listar todos los clientes (no se esta trabajando)
if ($action == "showAll") {

} else {
    $stmt = $dbcon->prepare("SELECT SUM(REPLACE (precio_total, ',', '')) AS total FROM `salidas` WHERE fecha=:cid");
    $stmt->execute(array(':cid' => $action));
}

?>

<?php

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

?>
        <h5 style="margin: 2%;"><?php echo number_format($total)?></h5>

    <?php
    }
} else {
    ?>

<?php
}


?>