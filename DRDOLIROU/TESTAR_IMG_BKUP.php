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
 <!DOCTYPE HTML>

<html>
	<head>

		<title>Resultado do Diagnostico</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/Result.css" />
	</head>
	<body>
		
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<?php  include "MENU.php"; ?>
					<div id="banner">
						<div class="container">
							<div class="row">
								<?php 
								if($result_img){
									
										while($row_img = mysqli_fetch_array($result_img)){
											?>
											<div class="col-6 col-12-medium">
													<?php
													if($result){
													while($row = mysqli_fetch_array($result)){
														$name_diagnostico =  $row[0];
														$nome_Paciente = $row_img[3];
														$diagnostico= $row['TIPO'];	
 														$_SESSION['Tipo'] = $diagnostico;
														?>
														<p>O Paciente: <?php echo "$nome_Paciente"; ?>, tem como diagnostico: <?php echo "$name_diagnostico"; ?>  </p>

														<form action="UPDANDO_CI.php" method="POST" enctype="multipart/form-data">

															<input class="button-large" type="submit" value="Está Correto!" id="correto" name="correto">
															<input class="button-large" type="submit" value="Está Incorreto!" id="incorreto" name="incorreto">

														</form>

														<br><br><br><br><br><br><br><br><br>

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
											
											<?php 
										}
									}
									?>	

								</div>
							</div>
						</div>
					</div>
				</section>
			<!-- Copyright -->
				<div id="copyright">
					&copy
				</div>
		</div>
	</body>
</html>
