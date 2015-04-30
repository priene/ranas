<div class="contenedor">
<section id="registrobanda">
		<h2>Registra tu banda</h2>
		
			<?php
			$attributes = array('class' => 'validar form-horizontal','id' => 'validar_ingresar_banda');
			echo form_open('validar_ingresar_banda', $attributes);

			$nombre = array(
				'name'        => 'nombre',
				'id'          => 'ingresar-banda-nombre',
				'value'		=> set_value('nombre')
			);

			$gen=array('' => 'Seleccione genero');
			foreach ($genero as $g) {
				$gen[$g->id] = $g->nombre;
			}

			$ps=array();
			foreach ($paises as $p) {
				$ps[$p->id] = $p->nombre;
			}

			$prov=array('' => 'Seleccione provincia');
			foreach ($provincia as $pr) {
				$prov[$pr->id] = $pr->nombre;
			}

			$nombre_contacto = array(
				'name'        => 'nombre_contacto',
				'id'          => 'ingresar-banda-nombre-contacto',
				'value'		=> set_value('nombre_contacto')
			);

			$tel_contacto = array(
				'name'        => 'tel_contacto',
				'id'          => 'ingresar-banda-tel-contacto',
				'value'		=> set_value('tel_contacto')
			);

			$contacto = array(
				'name'        => 'contacto',
				'id'          => 'ingresar-banda-contacto',
				'value'		=> set_value('contacto')
			);


			$nombre_contacto2 = array(
				'name'        => 'nombre_contacto2',
				'id'          => 'ingresar-banda-nombre-contacto2',
				'class'		=> 'con2',
				'value'		=> set_value('nombre_contacto2')
			);

			$tel_contacto2 = array(
				'name'        => 'tel_contacto2',
				'id'          => 'ingresar-banda-tel-contacto2',
				'class'		=> 'con2',
				'value'		=> set_value('tel_contacto2')
			);

			$contacto2 = array(
				'name'        => 'contacto2',
				'id'          => 'ingresar-banda-contacto2',
				'class'		=> 'con2',
				'value'		=> set_value('contacto2')
			);


			$sitioweb = array(
				'name'        => 'sitioweb',
				'id'          => 'ingresar-banda-sitioweb',
				'class'		  => 'urlmedia',
				'disabled'	  => 'disabled',
				'value'		=> set_value('sitioweb')
			);

			$soundcloud = array(
				'name'        => 'soundcloud',
				'id'          => 'ingresar-banda-soundcloud',
				'class'		  => 'urlmedia',
				'disabled'	  => 'disabled',	
				'value'		=> set_value('soundcloud')
			);

			$bandcamp = array(
				'name'        => 'bandcamp',
				'id'          => 'ingresar-banda-bandcamp',
				'class'		  => 'urlmedia',
				'disabled'	  => 'disabled',
				'value'		=> set_value('bandcamp')
			);

			$youtube = array(
				'name'        => 'youtube',
				'id'          => 'ingresar-banda-youtube',
				'class'		  => 'urlmedia',
				'disabled'	  => 'disabled',
				'value'		=> set_value('youtube')
			);

			$attrlabel = array(
        		'class'	=>	'col-lg-6 col-md-6 col-sm-6 col-xs-12'
    		);

	        ?>

	        <div class="nombre-input form-group">
	        <?php
	        echo form_label('Nombre', 'nombre', $attrlabel);
	        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
			echo form_input($nombre);
			echo "</div>";
			echo form_error('nombre');
			?>
			</div>
	        
	        <div class="genero-input form-group">
	        <?php
	        echo form_label('Genero', 'genero', $attrlabel);
	        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
			echo form_dropdown('genero', $gen, set_value('genero'));
			echo "</div>";
			echo form_error('genero');
			?>
			</div>

	        <div class="pais-input form-group">
	        <?php
	        echo form_label('Pais', 'pais', $attrlabel);
	        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
			echo form_dropdown('pais', $ps, '12');
			echo "</div>";
			echo form_error('pais');
			?>
			</div>

	        <div class="provincia-input form-group">
	        <?php
	        echo form_label('Provincia', 'provincia', $attrlabel);
	        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
			echo form_dropdown('provincia', $prov, set_value('provincia'));
			echo "</div>";
			echo form_error('provincia');
			?>
			</div>

	        <div class="localidad-input form-group">
	        <?php
	        echo form_label('Localidad', 'localidad', $attrlabel);
	        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs lcl'>";
			echo "</div>";
			echo form_error('localidad');
			?>
			</div>

			<div class="nombre-contacto-input form-group">
	        <?php
	        echo form_label('Nombre de contacto', 'nombre-contacto', $attrlabel);
	        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
			echo form_input($nombre_contacto);
			echo "</div>";
			echo form_error('nombre_contacto');
			?>
			</div>

			<div class="tel-contacto-input form-group">
	        <?php
	        echo form_label('Telefono de contacto', 'telefono-contacto', $attrlabel);
	        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
			echo form_input($tel_contacto);
			echo "</div>";
			echo form_error('tel_contacto');
			?>
			</div>

			<div class="contacto-input form-group">
	        <?php
	        echo form_label('Email o Facebook de Contacto', 'contacto', $attrlabel);
	        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
			echo form_input($contacto);
			echo "</div>";
			echo form_error('contacto');
			?>
			</div>

			<div>
				<label>¿Desea ingresar otro contacto de la banda?</label>
				<input type="radio" name="otrocontacto" class="otrocontacto" value="no" checked="checked"><label for="otrocontacto">NO</label>
				<input type="radio" name="otrocontacto" class="otrocontacto" value="si"><label for="otrocontacto">SI</label>
			</div>

			<div class="contac2">
				<div class="nombre-contacto-input form-group">
		        <?php
		        echo form_label('Nombre de contacto 2', 'nombre-contacto2', $attrlabel);
		        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
				echo form_input($nombre_contacto2);
				echo "</div>";
				echo form_error('nombre_contacto2');
				?>
				</div>

				<div class="tel-contacto-input form-group">
		        <?php
		        echo form_label('Telefono de contacto 2', 'telefono-contacto2', $attrlabel);
		        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
				echo form_input($tel_contacto2);
				echo "</div>";
				echo form_error('tel_contacto2');
				?>
				</div>

				<div class="contacto-input form-group">
		        <?php
		        echo form_label('Email o Facebook de Contacto 2', 'contacto2', $attrlabel);
		        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
				echo form_input($contacto2);
				echo "</div>";
				echo form_error('contacto2');
				?>
				</div>
			</div>

			

			<div class="sitioweb media">
				<?php
		        echo form_label('Sitio Web', 'sitioweb', $attrlabel);
		        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
		        
				echo '<input type="radio" name="swradio" class="radiomedia" value="no" checked="checked"><label for="swradio">NO</label>';
				echo '<input type="radio" name="swradio" class="radiomedia" value="si"><label for="swradio">SI</label>';
				echo form_input($sitioweb);
				echo "</div>";
				echo form_error('sitioweb');
				?>
			</div>

			<div class="soundcloud media">
				<?php
		        echo form_label('Soundcloud', 'soundcloud', $attrlabel);
		        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
		        
				echo '<input type="radio" name="scradio" class="radiomedia" value="no" checked="checked"><label for="scradio">NO</label>';
				echo '<input type="radio" name="scradio" class="radiomedia" value="si"><label for="scradio">SI</label>';
				echo form_input($soundcloud);
				echo "</div>";
				echo form_error('soundcloud');
				?>
			</div>

			<div class="bandcamp media">
				<?php
		        echo form_label('Bandcamp', 'bandcamp', $attrlabel);
		        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
		        
				echo '<input type="radio" name="bcradio" class="radiomedia" value="no" checked="checked"><label for="bcradio">NO</label>';
				echo '<input type="radio" name="bcradio" class="radiomedia" value="si"><label for="bcradio">SI</label>';
				echo form_input($bandcamp);
				echo "</div>";
				echo form_error('bandcamp');
				?>
			</div>

			<div class="youtube media">
				<?php
		        echo form_label('Youtube', 'youtube', $attrlabel);
		        echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 inputs'>";
		        
				echo '<input type="radio" name="ytradio" class="radiomedia" value="no" checked="checked"><label for="ytradio">NO</label>';
				echo '<input type="radio" name="ytradio" class="radiomedia" value="si"><label for="ytradio">SI</label>';
				echo form_input($youtube);
				echo "</div>";
				echo form_error('youtube');
				?>
			</div>
			
			<input type="hidden" name="turno" value="1">
			<input type="hidden" name="convocatoria" value="1">
			<input type="hidden" name="estado" value="1">
			<input type="hidden" name="confirmada" value="0">

			<input type="hidden" name="esadmin" value="0">

	 		
	 		<?php
	 		echo "<div class='col-lg-12'>";
			echo form_submit('ingresarbanda', 'Registrar','class="submit-input"');
			echo "</div>";
			echo form_close();
			?>
			<div class="msjinsertar col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
</section>
</div>
