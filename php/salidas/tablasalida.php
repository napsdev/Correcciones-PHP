<?php
if (!isset($_SESSION['usuario'])) {
	header('Location: ../../index.php');
}


include __DIR__ . '/../conexion.php';
$user_id = null;
$sql1 = "select id,precio_total,fecha,metodo_pago,clientenombre,estudio,ganancia,email from salidas ORDER BY fecha ASC";
$query = $con->query($sql1);


?>
<?php if ($query->num_rows > 0) : ?>
	<table id="table_id" class="table table-bordered table-hover">
		<thead>
			<th>No.</th>
			<th>Precio total</th>
			<th>Fecha</th>
			<th>Método de pago</th>
			<th>Cliente</th>
			<th>Estudio</th>
			<th>Ganancia</th>
			<th></th>
		</thead>
		<?php while ($r = $query->fetch_array()) : ?>
			<tr>
				<td><?php echo $r["id"]; ?></td>
				<td><?php echo $r["precio_total"]; ?></td>
				<td><?php echo $r["fecha"]; ?></td>
				<td><?php echo $r["metodo_pago"]; ?></td>
				<td><?php echo $r["clientenombre"]; ?></td>
				<td><?php echo $r["estudio"]; ?></td>
				<td><?php if($r["ganancia"]!=null){$ganac=number_format($r["ganancia"]);}else{$ganac="Desconocido";} echo $ganac; ?></td>
				<td>
			    <a href="../../pdfdesdetabla.php?id=<?php echo $r["id"]; ?>" target="_blank" class="btn btn-sm btn-warning">PDF</a>
			    
			    <?php if($r["email"]!=null){ echo("<a href='../../pdfdesdetabla2.php?id=".$r["id"]."' target='_blank' class='btn btn-sm btn-info'>Enviar</a>");}else{}?>
			    
				<a href="#" id="del-<?php echo $r["id"]; ?>" class="btn btn-sm btn-danger">Eliminar</a>
					<script>
						$("#del-<?php echo $r["id"]; ?>").click(function(e) {
							e.preventDefault();
							p = confirm("Estas seguro?");
							if (p) {
								window.location = "php/salidas/eliminarsalida.php?id=<?php echo $r["id"]; ?>" ;
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