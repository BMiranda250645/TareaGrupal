<head>
	<meta charset="UTF-8">
	<title>Multiplicación de 2 numeros enteros</title>
</head>
<body>
<H2>Multiplicación de 2 numeros en PHP</H2>
<form action="multiplicar.php" method="POST">
	<table>
	<tr>
		<td><input type="text" name="numero1"></td>
	</tr>
	<tr>
		<td><input type="text" name="numero2"></td>
	</tr>
	<tr>
		<td> <input type="submit" value="multiplicar"> </td>
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
		$multiplicar = $num1* $num2;
                
		echo "La multiplicacion de ".$num1." y ".$num2." es ".$multiplicar; 
	}
?>
