<?php
	
	if (isset($_POST["username"])&& isset($_FILES['perfil']) && isset($_FILES['fundo'])){
		if($_POST["username"]!=''){
			if(!file_exists('dados/'.$_POST['username']))
{
				mkdir('dados/'.$_POST['username']);
			}
			
			move_uploaded_file($_FILES['perfil']['tmp_name'],'dados/'.$_POST['username'].'/perfil.jpg');
			move_uploaded_file($_FILES['fundo']['tmp_name'],'dados/'.$_POST['username'].'/fundo.jpg');
			
			session_start()

			$x= array[];
			$x['nome']= $_POST['name'];
			$x['snome']= $_POST['Sname'];
			$x['sexo']= $_POST['sexo'];
			$x['email']= $_POST['email'];
			$x['username']= $_POST['username'];
			$x['senha']= $_POST['senha'];
			var_dump($x);
			
			header("location:index.php");
		}
	}
?>