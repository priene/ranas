<div class="dashboard col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<ul class="bloques">
		<li class="panel col-lg-4 col-md-4">
			<div class="panaelnoconfirmados panelheader">
				<div class="text-right">
					<div class="numeropanel"><?= $noconfirmados ?></div>
					<div>Bandas sin confirmar</div>
				</div>
			</div>
			<div class="panelfooter">
				<a href="<?= site_url('confirmarbandas') ?>" class="definirbandas text-left">Confirmar Bandas</a>
			</div>
		</li>
		<li class="panel col-lg-4 col-md-4">
			<div class="panelnoturno panelheader">
				<div class="text-right">
					<div class="numeropanel"><?= $noturno ?></div>
					<div>Bandas sin turno</div>
				</div>
			</div>
			<div class="panelfooter">
				<a href="<?= site_url('definirturnos') ?>" class="definirbandas">Definir turno</a>
			</div>
		</li>
		<li class="panel col-lg-4 col-md-4">
			<div class="panelnoconvocatoria panelheader">
				<div class="text-right">
					<div class="numeropanel"><?= $noconvocatoria ?></div>
					<div>Bandas sin convocatoria</div>
				</div>
			</div>
			<div class="panelfooter">
				<a href="<?= site_url('definirconvocatorias') ?>" class="definirbandas text-left">Definir convocatoria</a>
			</div>
		</li>
	</ul>
	
	<div class="graficos">
		<div id="grafico1" class="chart col-lg-5 col-md-5"></div>
		<div id="grafico2" class="chart col-lg-5 col-md-5"></div>
		<div id="grafico3" class="chart col-lg-5 col-md-5"></div>
		<div id="grafico4" class="chart col-lg-5 col-md-5"></div>
	</div>
</div>

