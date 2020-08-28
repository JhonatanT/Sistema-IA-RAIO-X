<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="IA_PULMAO";
	$conn = mysqli_connect( $hostname, $username, $password,$dbname ) or die( ' Erro na conexão ' ); 

		session_start(); 
		$ID_FUNC = $_COOKIE['id'];
		$nome_FUNC_cookie = $_COOKIE['nome'];

		$nome_do_Paciente = $_SESSION['nome_do_Paciente'];//no caso seria ID do paciente tem que criar a tabela de paciente para continucar
		$nome_img = $_SESSION['Nome_IMG'];
		$ID_PACIENTE = $_SESSION['ID_PACIENTE'];
		$Diagnostico = $_SESSION['Tipo'];
		echo "$ID_FUNC";
		echo "$Diagnostico";
		echo "$nome_img";
	
		

		if (isset($_REQUEST['correto'])) {
		$query = "insert into PULMAO_TESTE_HISTORICO values (null,'$ID_FUNC','$ID_PACIENTE','$Diagnostico', '$nome_img' ,'1')"; 
		$result_img = mysqli_query( $conn,$query );
		header('Location: Correto_incorreto.php');
		}
		else if(isset($_REQUEST['incorreto'])){
		$query = "insert into PULMAO_TESTE_HISTORICO values (null,'$ID_FUNC','$ID_PACIENTE','$Diagnostico', '$nome_img' ,'0')"; 
		$result = mysqli_query( $conn,$query);
		header('Location: Correto_incorreto.php');
		}
		

?>
