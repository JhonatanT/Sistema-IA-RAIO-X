<?php

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="IA_PULMAO";
	$conn = mysqli_connect( $hostname, $username, $password,$dbname ) or die( ' Erro na conexão ' ); 

	$Nome = $_REQUEST['nome'];
	$CPF = $_REQUEST['cpf'];
	$RG = $_REQUEST['rg'];
	$CEP = $_REQUEST['cep'];
	$DT_NC = $_REQUEST['data_nascimento'];
	
 	session_start();
	$verifica = mysqli_query($conn,"SELECT * FROM TB_PACIENTE WHERE CPF ='$CPF' OR RG = '$RG'") or die("erro ao selecionar");
	$dadosrecebidos = mysqli_fetch_array($verifica);
		 if (mysqli_num_rows($verifica)<=0){
		        $query = "INSERT into TB_PACIENTE values (null,'$Nome','$CPF','$RG', '$CEP' ,'$DT_NC');"; 
		
			$result = mysqli_query( $conn,$query );
			if($result){
				header("Location:CAD_PACI.php");
				$CAD = 1;
				$_SESSION['CAD'] = $CAD;
				
			}
			else{
				header("Location:CAD_PACI.php");
				$CAD = 0;
				$_SESSION['CAD'] = $CAD;
			}

		}
		else{
				header("Location:CAD_PACI.php");
				$CAD = 0;
				$_SESSION['CAD'] = $CAD;
			}
?>