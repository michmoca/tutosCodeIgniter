	<?php
		foreach ($cursos->result() as $curso ) { ?>
			<ul>
				<li><?= $curso->nombreCurso; ?></li>
			</ul>
	<?php } ?>		
	</body>
</html>