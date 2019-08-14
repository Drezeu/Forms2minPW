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
<fieldset id=name>
      
     Quanto é 1+1?
 
    </fieldset> 		
</center>
    
	<fieldset>
		<center>
		 <div id="l1">
		<label><input type="radio" name="p1" value="a">3</label>
		<br>
		<label><input type="radio" name="p1" value="b">2</label>
		<br>
		</div>

		<div id="l2">
		<label><input type="radio" name="p1" value="c" style="right: 50px;">7</label>
		<br>
		<label><input type="radio" name="p1" value="d">1</label>
		<br>
		</div>
		<input type="submit" name="button" value="enviar">
		</fieldset>
		</center>
	
	  

</form>

	<?php 
	if(isset($_POST['p1']))
	{
	$_SESSION['r1'] = $_POST['p1'];

	 }
	 if(isset($_SESSION['r1'])){
	 	header("location: pergunta2.php");
	 }
	 ?>

</body>
</html>

 