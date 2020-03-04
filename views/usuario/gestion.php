<h1>Gestión de clientes/usuarios</h1>



<?php Utils::deleteSession('usuario'); ?>
	
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
	<strong class="alert_green">El cliente se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>	
	<strong class="alert_red">El cliente NO se ha borrado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>
	
<table>
	<tr>
		<th>NOMBRE</th>
		<th>APELLIDOS</th>
		<th>EMAIL</th>
		<th>ROL</th>
		<th>ACCIONES</th>
	</tr>
	<?php while($cli = $usuarios->fetch_object()): ?>
		<tr>
		
			<td><?=$cli->nombre;?></td>
			<td><?=$cli->apellidos;?></td>
			<td><?=$cli->email;?></td>
			<td><?=$cli->rol;?></td>
			<td>
				<!-- <a href="<?=base_url?>usuario/editar&id=<?=$cli->id?>" class="button button-gestion">Editar</a> -->
				<a href="<?=base_url?>usuario/eliminar&id=<?=$cli->id?>" class="button button-gestion button-red">Eliminar</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>
