<?php 
	if (isset($_GET["delete"])) {
		shell_exec("rm -r ../".$_GET["carpeta"]);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tarea baez</title>
</head>
<body>
	<center>
		<form method="GET">
			<input type="text" name="carpeta" placeholder="Nombre de carpeta">
			<input type="submit" name="delete" value="Eliminar">
		</form>
	</center>
</body>
</html>