<?php
	if ((isset($_POST["usuario"])) && (isset($_POST["senha"]))) 
	{
	    if (($_POST["usuario"]=="hoot") && (hash('sha512', $_POST["senha"])== hash('sha512', "hoot"))){
	    	
	    	header('location:home.php');
		 }else{
		 	header('location:index.php');
		 }
	}else{  
	  echo "<script> alert('erro');</script>";
	  header('location:index.php');
	}
?>