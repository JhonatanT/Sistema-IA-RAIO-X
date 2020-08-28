<?php

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="IA_PULMAO";
	$conn = mysqli_connect( $hostname, $username, $password,$dbname ) or die( ' Erro na conexão ' ); 

	$usuario = $_REQUEST['Usuario'];
	$senha = $_REQUEST['senha'];
 	$entrar = $_REQUEST['entrar'];
 	

	$verifica = mysqli_query($conn,"SELECT * FROM TB_LOGIN WHERE Usuario ='$usuario' AND Senha = '$senha'") or die("erro ao selecionar");
	$dadosrecebidos = mysqli_fetch_array($verifica);
    $Nome= $dadosrecebidos['Nome'];
    $id= $dadosrecebidos['ID_USU'];
   
      
	  if (isset($entrar)) {
		  if (mysqli_num_rows($verifica)<=0){
		        echo"<script language='javascript' type='text/javascript'>
		        alert('Login e/ou senha incorretos');window.location
		        .href='index.php';</script>";
		        die();
	      	}else{
	        setcookie("nome",$Nome);
	        setcookie("id",$id);
	        header("Location:TESTE.php");
	    	}
	    }
		




?>