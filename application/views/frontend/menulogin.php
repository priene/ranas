<div class="dashboard col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	<div class="graficos col-lg-10 col-md-10">
		<div id="grafico1" class="chart col-lg-6 col-md-6"></div>
		<div id="grafico2" class="chart col-lg-6 col-md-6"></div>
		<div id="grafico3" class="chart col-lg-6 col-md-6"></div>
		<div id="grafico4" class="chart col-lg-6 col-md-6"></div>
	</div>

	<ul class="bloques col-lg-2 col-md-2">
		<li class="panel">
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
		<li class="panel">
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
		<li class="panel">
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

</div>

