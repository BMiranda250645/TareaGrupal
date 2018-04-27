<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Resta</title>
</head>
<body>
<H2>Resta de 2 numeros </H2>
<form action="resta.php" method="POST">
	<table>
	<tr>
		<td><input type="text" name="numero1"></td>
	</tr>
	<tr>
		<td><input type="text" name="numero2"></td>
	</tr>
	<tr>
		<td> <input type="submit" value="restar"> </td>
	</tr>
</table>
</form>
</body>
</html>
<?php
	if($_POST)
	{	
		$num1 = $_POST
		['numero1'];
		$num2 = $_POST
		['numero2'];
		$resta = $num1 
		- $num2;
		echo "La resta de ".$num1." y ".$num2." es ".$resta; 
	}
?>

