<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="IA_PULMAO";
	$conn = mysqli_connect( $hostname, $username, $password,$dbname ) or die( ' Erro na conexão ' ); 

	session_start();

	$msg = false;
	if(!isset($_REQUEST['pesqui_pacient'])){
		$UPLOAD_IMG = $_REQUEST['upload'];
	}
	else{
		$Pesqui_pacient = $_REQUEST['pesqui_pacient'];
	}

	if(!isset($_REQUEST['upload'])){
		$Pesqui_pacient = $_REQUEST['pesqui_pacient'];
	}
	else{
		$UPLOAD_IMG = $_REQUEST['upload'];
	}
	
	


		if (isset($UPLOAD_IMG)) {
			if(isset($_FILES['arquivo'])){
				$nome_ID = $_COOKIE['id'];
				$extensao = strtolower(substr($_FILES['arquivo']['name'], -5));
				$novo_nome = md5(time()) . $extensao;
				$diretorio = "C:/xampp/htdocs/DRDOLIROU/validate/";
				move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

				
				$ID_PACIENT = $_COOKIE['ID_PACIENTE'];

				$Nome_Paciente = $_COOKIE['Nome_Paciente'];
				
				$query = "INSERT INTO IMAGEM_TESTE VALUES(null,'$nome_ID','$ID_PACIENT', '$Nome_Paciente' ,'$novo_nome',NOW())"; 

				$result = mysqli_query( $conn,$query );
				if($result){
					header("Location:TESTE.php");
					$msg = "Arquivo enviado com sucesso";
					$habilita = "1";
					setcookie("habilita",$habilita);
					setcookie("msg",$msg);

					
				}
				else{
					header("Location:TESTE.php");
					$msg = "FALHOU";
					$habilita = "1";
					setcookie("habilita",$habilita);
					setcookie("msg",$msg);
				}
				setcookie(ID_PACIENTE, '', time()-3600);
				setcookie(Nome_Paciente, '', time()-3600);
			}
			
		}

		if (isset($Pesqui_pacient)) {
		$CPF = $_REQUEST['CPF'];
		$verifica = mysqli_query($conn,"SELECT * FROM TB_PACIENTE WHERE CPF ='$CPF'") or die("erro ao selecionar");
		$dadosrecebidos = mysqli_fetch_array($verifica);

		 if (mysqli_num_rows($verifica)<=0){
		 		$msg = "Esse paciente não existe";
				setcookie("msg",$msg);
				$habilita = "1";
				setcookie("habilita",$habilita);
				header("Location:TESTE.php");

		 }
		 else{
		 		
		 		$Nome_paciente = $dadosrecebidos['Nome_Paciente'];
				$ID_PACIENTE = $dadosrecebidos['ID_Pacien'];
		 	

		 		setcookie('ID_PACIENTE',$ID_PACIENTE);

		 		$habilita = "0";
		 		setcookie("Nome_Paciente",$Nome_paciente);
				setcookie("habilita",$habilita);
				$msg = "Escolher Imagem";
				setcookie("msg",$msg);
				header("Location:TESTE.php");
		 }
		}
?>