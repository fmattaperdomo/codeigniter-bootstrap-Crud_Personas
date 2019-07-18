
		<br>
		<a href="../listado" class="btn btn-success">Regresar</a>
		<br><br>		
		<?php echo form_open(''); ?>
		<div class="form-group">
			<?php 
			echo form_label('Nombre', 'nombre');

			$input = array(
				'name'  => 'nombre',
				'value' => $nombre,
				'readonly' => 'readonly',
				'class' => 'form-control input-lg'
			);
			echo form_input($input);
			?>
		</div>
		<div class="form-group">
			<?php 
			echo form_label('Apellido', 'apellido');

			$input = array(
				'name'  => 'apellido',
				'readonly' => 'readonly',
				'value' => $apellido,
				'class' => 'form-control input-lg'
			);
			echo form_input($input);
			?>
		</div>
		<div class="form-group">
			<?php 
			echo form_label('Edad', 'edad');

			$input = array(
				'name'  => 'edad',
				'readonly' => 'readonly',
				'type'  => 'number',
				'value' => $edad,
				'class' => 'form-control input-lg'
			);
			echo form_input($input);
			?>
		</div>
		<?php echo form_close(); ?>
