<HTML> 
<HEAD> 
<TITLE> Multiplicacion </TITLE> 
</HEAD> 
<BODY> 
    
<H2>Multiplicacion  de 2 numeros </H2>
<form action="multiplicacion.php" method="POST">
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
		$multiplicacion = $num1 * $num2;
		echo "La multiplicación de ".$num1." y ".$num2." es ".$multiplicacion; 
	}
?>
