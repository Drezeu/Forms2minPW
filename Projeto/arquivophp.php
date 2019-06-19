<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<style type="text/css">
	#nome{
	font-size: 17px;
	font-family: "Arial";
	}
		#email{
	font-size: 17px;
	font-family: "Arial";
	}
		#cpf{
	font-size: 17px;
	font-family: "Arial";
	}
			#cart{
	font-size: 17px;
	font-family: "Arial";
	}
				#band{
	font-size: 17px;
	font-family: "Arial";
	}
				#vali{
	font-size: 17px;
	font-family: "Arial";
	}
	#caixa1{
		border-radius: 3%;
	}
	#caixa2{
		border-radius: 3%;
	}
	
</style>
<body>
	<fieldset id="caixa1">
		<legend><h3>informações Pessoais</h3></legend>
		Nome:<div id="nome"><label><?php echo $_POST['nomec']?></label></div>
		<br>

		Email:<div id="email"><label><?php echo $_POST['email']?></label></div>
		<br>

		Cpf:<div id="cpf"><label><?php echo $_POST['cpf']?></label></div>
		<br>
	</fieldset>
	<fieldset id="caixa2">
		<legend><h3>Metodo De Pagamento</h3></legend>
		Cartão:<div id="cart"><label><?php echo $_POST['cart']?></label></div>
		<br>

		Bandeira Do Cartão:<div id="band"><label><?php echo $_POST['band']?></label></div>
		<br>
		Validade Do Cartão:<div id="vali"><label><?php echo $_POST['vali']?></label></div>
	</fieldset>

</body>
</html>