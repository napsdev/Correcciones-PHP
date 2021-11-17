<?php
include __DIR__ . '/../conexion.php';
$user_id = null;
$sql1 = "select * from productos";
$query = $con->query($sql1);
?>
<?php if ($query->num_rows > 0) : ?>
	<table id="table_id" class="table table-bordered table-hover">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Proveedor</th>
			<th>Cantidad</th>
			<th>Precio compra</th>
			<th>Precio venta</th>
			<th>Ganancia</th>
			<th></th>
		</thead>
		<?php while ($r = $query->fetch_array()) : ?>
			<tr>
				<td><?php echo $r["id"]; ?></td>
				<td><?php echo $r["nombre"]; ?></td>
				<td><?php echo $r["proveedor"]; ?></td>
				<td><?php echo $r["cantidad"]; ?></td>
				<td><?php echo $r["precio_compra"]; ?></td>
				<td><?php echo $r["precio_venta"]; ?></td>
				<td><?php echo $r["ganancia"]; ?></td>
				<td style="width:150px;">
					<a href="../../editarproductos.php?id=<?php echo $r["id"]; ?>" class="btn btn-sm btn-warning">Editar</a>
					<a href="#" id="del-<?php echo $r["id"]; ?>" class="btn btn-sm btn-danger">Eliminar</a>
					<script>
						$("#del-<?php echo $r["id"]; ?>").click(function(e) {
							e.preventDefault();
							p = confirm("Estas seguro?");
							if (p) {
								window.location = "php/productos/eliminar.php?id=<?php echo $r["id"]; ?>" ;
							}
						});
					</script>
				</td>
			</tr>
		<?php endwhile; ?>
	</table>
<?php else : ?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif; ?>