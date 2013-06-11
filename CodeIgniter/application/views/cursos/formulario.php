	<?= form_open("/cursos/recibirDatos") ?>

	<?php
		$nombre =  array(
			'name' =>  'nombre',
			'placeholder' => 'Escribe tu nombre'
		);

		$videos = array(
			'name' =>  'videos',
			'placeholder' => 'Cantidad videos del curso'
		);
	?>

	<?= form_label('Nombre: ', 'nombre') ?>
	<?= form_input($nombre) ?>
	<br><br>
	<?= form_label('Número de videos: ', 'videos') ?>
	<?= form_input($videos) ?>
	<br><br>
	<?= form_submit('','Subir curso') ?>
	<!--<?= form_submit('nombrecontrol','Subir curso') ?>-->
	
	<?= form_close() ?>

	</body>
</html>