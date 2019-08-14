<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#name{
	background-color: black;
	color: white;
		width: 100%;
		align-self: center;
 		height: 100%;
 		font-size: 50px;
}
fieldset{
 		background-color: darkgrey;
 		color: white;
 		width: 100%;
 		height: 100%;
 		align-self: center;
 		font-size: 15px;
 	}
 
 img{
 	width: 100px;
 	height: 100px;
 	left: 100px;
 }
	</style>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<center>
	<fieldset id="name">
		Acertos 
	</fieldset>
</center>
<fieldset>

<?php
echo $_SESSION['avatar'];
echo "<br>";
?>
<?php
echo "Seu Nome é:".$_SESSION['login'];
echo "<br>";
echo "<br>";
echo "Sua resposta da primeira pergunta foi:";
echo $_SESSION['r1'];
echo "<br>";
echo "Sua resposta da segunda pergunta foi:";
echo $_SESSION['r2'];
echo "<br>";
echo "Sua resposta da terceira pergunta foi:";
echo $_SESSION['r3'];
echo "<br>";
echo "Sua resposta da quarta pergunta foi:";
echo $_SESSION['r4'];
echo "<br>";
echo "Sua resposta da quinta pergunta foi:";
echo $_SESSION['r5'];
echo "<br>";
?>
<?php
if($_SESSION['r1']== "b"){
	$_SESSION['acerto']++;
}
else{
	$_SESSION['erro']++;
}
if($_SESSION['r2']== "c"){
	$_SESSION['acerto']++;
}
else{
	$_SESSION['erro']++;
}
if($_SESSION['r3']== "b"){
	$_SESSION['acerto']++;
}
else{
	$_SESSION['erro']++;
}
if($_SESSION['r4']== "d"){
	$_SESSION['acerto']++;
}
else{
	$_SESSION['erro']++;
}
if($_SESSION['r5']== "a"){
	$_SESSION['acerto']++;
}
else{
	$_SESSION['erro']++;
}
?>
Você acertou:
<?php
echo $_SESSION['acerto'];

?>

<?php 
echo "<br>";
?>
Você Errou:
<?php

echo $_SESSION['erro'];
?>

</fieldset>
<?php
session_destroy();
?>


</body>
</html>

