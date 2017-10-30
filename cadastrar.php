
<!doctype html>  
<html>
	<head>
		<meta charset="utf-8"/>	
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<script src="js/jquery.min.js"></script>
		<script>
			$(function(){
				$("document").ready(function(){
					$(".welcome").fadeOut("slow");
					$(".botao").fadeOut("slow");
					$(".login").fadeOut("slow");
					$(".cadastro").fadeIn("slow");
					var altura = $(window).innerHeight();
					var alturaDiv = $(".cadastro").innerHeight();
					var novaAltura = (altura - alturaDiv)/2;
					$(".cadastro").css("top",novaAltura);
					var largura = $(window).innerWidth();
					var larguraDiv = $(".cadastro").innerWidth();
					var novalargura = (largura- larguraDiv)/2;
					$(".cadastro").css("left",novalargura);
				})
			});
		</script>
	</head>
	<body>
		<div  class="cadastro">
			<form action="cadastro.php" method="POST" enctype="multipart/form-data">
				<input type="text" placeholder="Nome" name="name" /><br/>
				<input type="text" placeholder="Sobrenome" name="Sname" /><br/>
				<input type="email" placeholder="Email" name="email" /><br/>
				<input type="text" placeholder="nome usuario" name="username"/><br/>
				
				<input type="password" placeholder="Senha"  name="senha"/><br/>
				<input type="password" placeholder="Confirmação de senha" name="Csenha" /><br/>
				
				<select name="sexo"><br/>
					<option value="M">MULHER</option>
					<option value="H">HOMEM</option>
				</select>
				<p>perfil</p>
				<input type="file" name="perfil"  /><br/>
				<p>fundo</p>
				<input type="file" name="fundo"/><br/>

				<input type="submit" value="click" class="cadastra" /><br/>
			</form>
		</div>
		<a href="index.php"><button class="voltar">logar</button></a><br/>

		</body>
</html>