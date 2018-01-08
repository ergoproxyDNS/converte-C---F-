<!--
	Criado por Ergo
	Discord : Ergo#6306
	Data: 15/12/2017
-->
<!DOCTYPE>
<html>
<head>
	<title>Converter</title>
    <h1>Converter para Fº ou Cº</h1>
    <!--
    <script type="text/javascript">
    	bemvindo = "Criado por Ergo";
    	alert(bemvindo);
    </script>
    -->
    <style type="text/css">
    	h2{
    		color: white;
    	}
    	h1{
    		color: green;
    	}
        body{ 
        	background-color: black;
            background-attachment: scroll;

        }  
        h3{
        	color: red;
        }
    </style>
</head>
<body>
 <form method="GET">
   <h3>Numero :</h3><input type="text" name="numero"/>
   <input type="submit" name="C" value="Cº"/> 
   <input type="submit" name="F" value="Fº"/>
 </form>
<!--
Aqui começa as funçoes do php
-->
<?php
$numero = intval($_GET['numero']); 
$botaoc = $_GET['C']; 
$botaof = $_GET['F'];
print("<h2>Digite um numero e clique em um botao</h2>"); 
if(!$numero) {
	echo "Digite um numero antes !";
}
if(isset($botaoc)){
	echo "<h1>Transformando em Celsius...</h1>";
	c($numero);
}
if(isset($botaof)) {
	echo "<h1>Transformando em F...</h1>";
	f($numero); 

}
function c ($numero){
	$c = $numero;
	$calculo1 = $c - 32; 
	$calculo2 = 5 * $calculo1; 
	$calculo3 = $calculo2 / 9; 
	print("<h3>" . $calculo3 . "</h3>");
}
function f ($numero){
	$f = $numero;
	$calculo1 = $f * 9; 
	$calculo2 = $calculo1 / 5; 
	$calculo3 = $calculo2 + 32; 
	print("<h3>" . $calculo3 . "</h3>");
}


?>
<!--
Converte para C ou F
-->
</body>
</html> 
