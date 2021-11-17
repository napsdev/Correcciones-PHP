<?php
include __DIR__ . '/../conexion.php';

$user_id = null;
$sql1 = "select * from gastos";
$query = $con->query($sql1);
?>

<?php if ($query->num_rows > 0) : ?>
	<table id="table_id" class="table table-bordered table-hover">
		<thead>
			<th>ID</th>
			<th>Descripción</th>
			<th>Fecha</th>
			<th>Valor</th>
			<th></th>
		</thead>
		<?php while ($r = $query->fetch_array()) : ?>
			<tr>
				<td><?php echo $r["id"]; ?></td>
				<td><?php echo $r["descripcion"]; ?></td>
				<td><?php echo $r["fecha"]; ?></td>
				<td><?php echo number_format($r["valor"]); ?></td>
				<td style="width:150px;">
					<a href="../../editargastos.php?id=<?php echo $r["id"]; ?>" class="btn btn-sm btn-warning">Editar</a>
					<a href="#" id="del-<?php echo $r["id"]; ?>" class="btn btn-sm btn-danger">Eliminar</a>
					<script>
						$("#del-<?php echo $r["id"]; ?>").click(function(e) {
							e.preventDefault();
							p = confirm("Estas seguro?");
							if (p) {
								window.location = "php/gastos/eliminargastos.php?id=" + <?php echo "'".$r["id"]."'"; ?>;

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