	<?= form_open("/codigofacilito/recibirdatos") ?>

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

	<label>
		Nombre:
		<?= form_input($nombre) ?>
	</label>
	<label>
		Número de videos:
		<?= form_input($videos) ?>
	</label>
	<?= form_close() ?>

	</body>
</html>