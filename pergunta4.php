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

	<center>
		<fieldset id="name">
			Quanto é 19999999999999999999999999999999+1?
		</fieldset>
	</center>
	<center>
	<fieldset>
		<form method="post">
		
			<label><input type="radio" name="p4" value="a">200000000000000000000000000000</label>
			<br>
		<label><input type="radio" name="p4" value="b">200000000000000000000000000000000</label>
		<br>
		<label><input type="radio" name="p4" value="c">20000000000000000000000000000</label>
		<br>
		<label><input type="radio" name="p4" value="d">20000000000000000000000000000000</label>
		<br>
			<input type="submit" name="button" value="enviar">
		
		</form>
	</fieldset>
		</center>
	
	<?php 
	if(isset($_POST['p4']))
	{
	$_SESSION['r4'] = $_POST['p4'];

	 }
	 if(isset($_SESSION['r4'])){
	 	header("location: pergunta5.php");
	 }
	 ?>

</body>
</html>
