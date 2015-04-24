<div class="users col-lg-12 col-md-12">
	<h2>Confirmar bandas</h2>
		<?php 
			if (sizeof($valores) > 0){
		?> 
		<table class="tablaconfirmarbandas">
			<thead>
				<th><input type="checkbox" name="todos"></th>
				<th>Banda</th>
				<th>Información</th>
				<th>Borrar</th>
			</thead>
			<tbody>
				<?php
					foreach ($valores as $val) {
				?>

				<tr id="<?= $val->id ?>">
					<td><input type="checkbox" name="checkbanda"></td>
					<td><?= $val->nombre ?></td>
					<td><a class="verinfo" href="verinfo_banda/<?= $val->id ?>">Información</a></td>
					<td><a class="elim" href="home/eliminar/banda/<?= $val->id ?>">Borrar</a></td>
				</tr>

				<?php

				}
				
				?>
			</tbody>
		</table>
		<a href="<?= site_url('validar_confirmarbandas'); ?>" id="eb1" class="confirmarestadobanda">Confirmar Banda</a>
		<?php 
			}else{ ?>
				<p>No hay bandas para confirmar</p>
			<?php }
		?> 	
		<div class="msjinsertar"></div>
		<div class="repetir"><a href="<?= site_url('confirmarbandas') ?>">Confirmar mas bandas</a></div>
		
		<div id="dialog-confirm" title="Informacion banda">
			<p class="pregunta"><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>¿Esta seguro que desea eliminar el registro?</p>
			<p class="respuesta"></p>
		</div>

		<div id="dialog-confirm2">
			<div class="respuesta">
				<div class="dialognombre"><label>Nombre: </label><p></p></div>
				<div class="dialoggenero"><label>Genero: </label><p></p></div>
				<div class="dialogpais"><label>Pais: </label><p></p></div>
				<div class="dialogprovincia"><label>Provincia: </label><p></p></div>
				<div class="dialoglocalidad"><label>Localidad: </label><p></p></div>
				<table class="table dialogcontacto">
					<thead>
					<tr>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Contacto</th>
					</tr>
					</thead>
					<tbody></tbody>
				</table>
				<table class="dialogmedia">

				</table>
				<div class="dialogturno"><label>Turno: </label><p></p></div>
				<div class="dialogconvocatoria"><label>Convocatoria: </label><p></p></div>
				<div class="dialogestado"><label>Estado: </label><p></p></div>
				<div class="dialogconfirmada"><label>Confirmada: </label><p></p></div>
			</div>
		</div>
</div>