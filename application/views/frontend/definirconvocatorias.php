<div class="users col-lg-12 col-md-12">
	<h2>Definir convocatorias</h2>
		<table class="tabladefinirconvocatorias">
			<thead>
				<th>Banda</th>
				<th>Informaci&oacute;n</th>
				<th>Turno</th>
			</thead>
			<tbody>
				<?php
					foreach ($valores as $val) {
				?>

				<tr id="<?= $val->id ?>">
					<td><?= $val->nombre ?></td>
					<td><a class="verinfo" href="verinfo_banda/<?= $val->id ?>">Informaci&oacute;n</a></td>
					<td>
						<input type="radio" name="defconvocatoria<?= $val->id ?>" value="1" checked><span>A definir</span>
						<input type="radio" name="defconvocatoria<?= $val->id ?>" value="2"><span>Primer turno</span>
						<input type="radio" name="defconvocatoria<?= $val->id ?>" value="3"><span>Segundo turno</span>
					</td>
				</tr>

				<?php

				}
				
				?>
			</tbody>
		</table>
		<a href="<?= site_url('validar_definirconvocatorias'); ?>" id="eb3" class="confirmarestadobanda">Confirmar convocatorias</a>
		<div class="msjinsertar"></div>
		<div class="repetir"><a href="<?= site_url('definirconvocatorias') ?>">Definir más turnos</a></div>
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