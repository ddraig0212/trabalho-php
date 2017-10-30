<?php
	session_start();
	
	$x= $_SESSION['user'];
	$val=$x['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>perfil</title>
	<link rel="stylesheet" href="css/perfil.css" type="text/css" />
	<style type="text/css">
		body{
			background-image: url(<?php echo '"dados/'.$val.'/fundo.png"'; ?>)>;
		}
	</style>
	</head>
<body>
	<div class="all">
		<div class="basic">
			<img class="fperfil" src= <?php echo '"dados/'.$val.'/perfil.jpg"'?>/>
			<h1><?php echo $x["username"]; ?></h1>
			<div class="info">
				<ul class="menu">

					<li><a href="">postagem</a></li>
					<li><a href="">amigos</a></li>
					<li><a href="">foto</a></li>
					<li><a href="">grupo</a></li>
					<li><a href="">informaçção</a></li>
					<li><a href='logout.php'>Sair</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
