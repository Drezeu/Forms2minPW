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
			Quanto é 31298361/123713?
		</fieldset>
	</center>
	<fieldset>
		<center>
	
	<form method="post">
		<div id="l1">
		<label><input type="radio" name="p3" value="a">123,81263812963816283618263861862</label>
		<br>
		<label><input type="radio" name="p3" value="b">252,99169044481986533347344256465</label>
		<br>
		 </div>
	 <div id="l2">
		<label><input type="radio" name="p3" value="c">299,12873561361893689163619919137</label>
		<br>
		<label><input type="radio" name="p3" value="d">340,12893612893689162368912639913</label>
        </div>
			<input type="submit" name="button" value="enviar">

	</form>
</center>
	</fieldset>
	<?php 
	if(isset($_POST['p3']))
	{
	$_SESSION['r3'] = $_POST['p3'];

	 }
	 if(isset($_SESSION['r3'])){
	 	header("location: pergunta4.php");
	 }
	 ?>

</body>
</html>
