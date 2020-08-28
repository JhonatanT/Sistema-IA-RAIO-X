<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="IA_PULMAO";
	$conn = mysqli_connect( $hostname, $username, $password,$dbname ) or die( ' Erro na conexão ' ); 
	session_start();
		$command = "C:\\Users\\Ner01\\PycharmProjects\\untitled\\venv\\Scripts\\python.exe C:\\Users\\Ner01\\PycharmProjects\\untitled\\venv\\Scripts\\teste.py 2>&1";
		$pid = popen( $command,"r");
		while( !feof( $pid ) )
		{
			fread($pid, 256);
			flush();
			ob_flush();
			usleep(100000);
		}

		
		$query = "SELECT * FROM PULMAO_TESTE"; 
		$result = mysqli_query( $conn,$query );
		
		$nome_ID = $_COOKIE['id'];
		$nome_FUNC_cookie = $_COOKIE['nome'];

		$query_img = "SELECT * FROM IMAGEM_TESTE WHERE  ID_Func = '$nome_ID'"; 
		$result_img = mysqli_query( $conn,$query_img );

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Raio-X</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util_CAD.css">
	<link rel="stylesheet" type="text/css" href="css/main_CAD.css">

		<link rel="stylesheet" href="css/Result.css" />
<!--===============================================================================================-->
</head>
<body>

		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<?php  include "MENU.php"; ?>

	
			

				<span class="login100-form-title p-b-41">
					Listagem de Diagnosticos
				</span>
							
									<div class="container">
										<div class="row">
											<?php 
											if($result_img){
												echo "<table>";
													while($row_img = mysqli_fetch_array($result_img)){
														echo "<tr>";
														?>
														<div class="col-6 col-12-medium">
																<?php
																if($result){
																while($row = mysqli_fetch_array($result)){
																	$name_diagnostico =  $row[0];
																	$nome_Paciente = $row_img[3];

																	$ID_PACIENTE = $row_img[2];

																	$_SESSION['ID_PACIENTE'] = $ID_PACIENTE;

																	$diagnostico= $row['TIPO'];	
			 														$_SESSION['Tipo'] = $diagnostico;
																	?>

																<div>
																	<p><font size="6" color="#FFFFFF"> O Paciente: <?php echo "$nome_Paciente";?>, tem como diagnostico: <?php echo "$name_diagnostico"; ?>  </font></p>

																	<form action="UPDANDO_CI.php" method="POST" enctype="multipart/form-data">

																		<input class="button-large" type="submit" value="Está Correto!" id="correto" name="correto">
																		<input class="button-large" type="submit" value="Está Incorreto!" id="incorreto" name="incorreto">

																	</form>
																</div>


																<?php
																}
															}
															?>
															<!-- FAZER TRAZER COMENTE ESSA CONSULTA DE AGORA E CRIAR UMA TELA DE HISTORICO PARA ELE VER TODAS OS DIAGNOSTICOS-->
																
														</div>
														
											<div class="col-6 col-12-medium imp-medium">
												<!-- Banner Image -->
												<?php 
														$name_img = $row_img[4];
														echo "imagem: ".$name_img."<br/>";

														$nome_img= $row_img['Nome_IMG'];	
			 											$_SESSION['Nome_IMG'] = $nome_img;

			 											$nome_do_Paciente= $row_img['Nome_Paciente'];
			 											$_SESSION['nome_do_Paciente'] = $nome_do_Paciente;
			 											
														?>
														
														<a href="#" class="bordered-feature-image"><img src="validate/<?php echo "$name_img"; ?>" alt="" /></a>
														
														<?php echo "</tr>";
													}
														echo "</table>";
												}
												?>	

											</div>
										</div>
									</div>
			
		</div>
	</div>
		

</body>
</html>