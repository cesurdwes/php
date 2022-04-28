<html>
	<head></head>
	<body>
		<select name="miSelect">
		<?php
			define('LIMITE',10);
			//echo '<select name="miSelect">';
			for ($i=1;$i<=LIMITE;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
			//echo '</select>';
		?>
		</select>
	</body>
</html>