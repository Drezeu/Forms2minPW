++<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	fieldset{
		background-color: darkgrey;
		color: white;
	}

	#menuzada{
		height: 100px;
		color: white;
		background-color: black;
		text-shadow: 10px;
		font-size: 60px;
	}
	#desq1{
		height: 150px;
		width: 150px;
		left: 233px;
	}

	#desq2{
		height: 150px;
		width: 150px;
		position: relative;
		left: 230px;
		bottom: 170px;
		
	}
	#des3{

		position: relative;
		left: 230px;
		bottom: 170px;

	}
</style>
	<title></title>
</head>
<body>

	<fieldset id="menuzada">
	<center>
		QUIZ CALCULATOR
	</center>
	</fieldset>


		<form id="e" method="Post">
			<div id="caixa1">
				<fieldset>
			<h1>Dados Pessoais:</h1>
		
			Nome:
			<table><input type="text" name="nomec"></table>
				<br>
				<br>
			<label><table><input type="radio" name="user" value="<img id='pessinha' src='user.png'>">
					<img id="desq1" src="user.png"></label>
			</table>
			<br>
			<label><table><input type="radio" id="des3" name="user" value="<img id='pessinha2' src='user2.png'>">
					<img id="desq2" src="user2.png"></label>

			</table>
			<input type="submit" name="botina">
			 	</fieldset>
			 	 </form>
			 	   </div> 	
		
 	  
 	     <?php 
 	     	if(isset($_POST['nomec']))  {
 	     		$_SESSION['login']=$_POST['nomec'];
 	     		$_SESSION['avatar']=$_POST['user'];
 	     			$_SESSION['erro']=0;
 	     			$_SESSION['acerto']=0;
	header("location:pergunta1.php");
	}

	
 	     
 	      ?>

 	  

 
 </body>
 </html>
