<div class="contenedor logn">
	<section id="ingresar">
		<h2>Ingresar</h2>
			<?php
			
			$attributes = array('class' => 'form-horizontal');
			echo form_open('login', $attributes);
			$email = array(
				'name'        => 'email',
				'id'          => 'ingresar-email',
				'value'		=> set_value('email')
            );
			$password = array(
				'name'        => 'password',
				'id'          => 'ingresar-password'
            );
			$attrlabel = array(
        		'class'	=>	'col-lg-6 col-md-6 col-sm-6 col-xs-12'
    		);           
	        ?>
	        <div class="email-input form-group">
	        <?php
	        echo form_error('check_database');
	        echo form_label('Correo electr&oacute;nico', 'email', $attrlabel);
	        echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12 inputs'>";
			echo form_input($email);
			echo "</div>";
			echo form_error('email');
			?>
			</div>
			<div class="password-input form-group">
			<?php
			echo form_label('Password', 'password', $attrlabel);
			echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12 inputs'>";
			echo form_password($password);
			echo "</div>";
			echo form_error('password');

			?>
	 		</div>
	 		<div class="ingresarBoton">
	 		<?php
			echo form_submit('ingresar', 'Inicar sesion','class="submit-input"');
			echo form_close();
			echo anchor('/recuperar_password', '&#191;No puede acceder a su cuenta?', array('class' => 'recuperar-contrasena', 'title' => 'Recuperar contraseña'));
			?>
			</div>
	</section>
</div>
