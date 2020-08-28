<!DOCTYPE HTML>

<html>
	<head>
		<title>Dimension by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main_CI.css" />
		<noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Obrigado por Usar o IA.GNOSIS</h1>
								<?php 
								$hostname="localhost";
								$username="root";
								$password="";
								$dbname="IA_PULMAO";
								$conn = mysqli_connect( $hostname, $username, $password,$dbname ) or die( ' Erro na conexão ' ); 
								session_start();
								$nome_do_Paciente = $_SESSION['nome_do_Paciente'];
								$ID_FUNC = $_COOKIE['id'];
								$ID_PACIENTE = $_SESSION['ID_PACIENTE'];

								$query_IC = "select * from PULMAO_TESTE_HISTORICO where ID_Func = '$ID_FUNC' and ID_Pacien = '$ID_PACIENTE'"; 
								$result_img = mysqli_query( $conn,$query_IC);

								$dadosrecebidos = mysqli_fetch_array($result_img);

								$CI = $dadosrecebidos['Correct_Incorrect'];

								IF($CI > 0){
									?>
										<p>Você informou que o Diagnostico do Paciente: <?php echo "$nome_do_Paciente"; ?>, teve seu Diagnostico está Correto</a> Licenciado.</p>
									<?php 

								}
								else{
									?>
									<p>Você informou que o Diagnostico do Paciente: <?php echo "$nome_do_Paciente"; ?>, teve seu Diagnostico está Incorreto</a> Licenciado.</p>
									<?php 
								}
								

								?>
								
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="TESTE.php">Voltar para Principal</a></li>
								<li><a href="TESTAR_IMGC.php">Historico de Pacientes</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy;</a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main_CI.js"></script>

	</body>
</html>
