<!doctype html>  
<html>
	<head>
		<meta charset="utf-8"/>	
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<script src="js/jquery.min.js"></script>
		<script>
			$(function(){
				$("document").ready(function(){
					$(".welcome").fadeOut();
					$(".botao").fadeOut();
					$("#Cadastrar").fadeIn();
					$(".cadastro").fadeOut();
					$(".login").fadeIn();
					var altura = $(window).innerHeight();
					var alturaDiv = $(".login").innerHeight();
					var novaAltura = (altura - alturaDiv)/2;
					$(".login").css("top",novaAltura);
					var largura = $(window).innerWidth();
					var larguraDiv = $(".login").innerWidth();
					var novalargura = (largura- larguraDiv)/2;
					$(".login").css("left",novalargura);
				})
			});
		</script>
	</head>
	<body>
		<div class="login" >
			<form action="processa.php" method="POST">
				<input name="usuario" placeholder="usuario" type="text"/><br/>
				<input name="senha" placeholder="senha" type="password"/><br/>
				<input class="sub" type="submit" value="Entrar"/><br/>
			</form>
			
		</div>
		<a href="cadastrar.php"><button class="voltar">cadastrar</button></a><br/>
	</body>
</html>