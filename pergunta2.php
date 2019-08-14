<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
		<style type="text/css">
		
#l1{
 	
 		

 		text-align: center;

 	}
 	#l2{

 		text-align: center;
 	}
 	fieldset{
 		background-color: darkgrey;
 		color: white;
 		width: 100%;
 		height: 100%;
 		align-self: center;
 		font-size: 50px;
 	}


#name{
	background-color: black;
	color: white;
		width: 100%;
		align-self: center;
 		height: 100%;
 		font-size: 50px;

}

	</style>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	

	<form method="post">
		<center>
		<fieldset id="name">
		Quanto é 3521731782357x1932861893681?
		</fieldset>
		</center>
		<fieldset>
			
		<center>
		<div id="l1">
		<label><input type="radio" name="p2" value="a">7215318273587125837512875</label>
		<br>
		<label><input type="radio" name="p2" value="b">3821638921639781529841929</label>
		<br>
        </div>
        <div id="l2">
		<label><input type="radio" name="p2" value="c">6807021161883114365586117</label>
		<br>
		<label><input type="radio" name="p2" value="d">1283123912737129739127719</label>
		<br>
		<input type="submit" name="button" value="enviar">
		</div>
</center>
			
		</fieldset>	
	</form>
	<?php 
	if(isset($_POST['p2']))
	{
	$_SESSION['r2'] = $_POST['p2'];

	 }
	 if(isset($_SESSION['r2'])){
	 	header("location: pergunta3.php");
	 }
	 ?>

</body>
</html>
