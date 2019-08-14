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
	<fieldset id="name">
		<center>
			Quanto é 0,0000000000000000000000001/10?
		</center>
	</fieldset>
	<center>
		<fieldset>
			<form method="post">
		<label><input type="radio" name="p5" value="a">0,00000000000000000000000001</label>
		<br>
		<label><input type="radio" name="p5" value="b">0,000000000000000000000000001</label>
		<br>
		<label><input type="radio" name="p5" value="c">0,0000000000000000000000001</label>
		<br>
		<label><input type="radio" name="p5" value="d">0,0000000000000000000000000001</label>
		<br>
			<input type="submit" name="button" value="enviar">
	</form>
		</fieldset>
	</center>
	
	<?php 
	if(isset($_POST['p5']))
	{
	$_SESSION['r5'] = $_POST['p5'];

	 }
	 if(isset($_SESSION['r5'])){
	 	header("location: resultado.php");
	 }
	 ?>

</body>
</html>
