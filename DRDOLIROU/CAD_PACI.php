
	
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Cadastro Paciente</title>
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
<!--===============================================================================================-->
</head>
<body>

		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			

			<?php  include "MENU.php"; ?>

	
			<div class="wrap-login100 p-t-30 p-b-50">

				<span class="login100-form-title p-b-41">
					Cadastrar Paciente
				</span>

				<?php 
				session_start();
				if(!isset($_SESSION['CAD'])) { 
				    //não existe
				} else {
					
					if($_SESSION['CAD'] > 0){
						?>
						<div  class="limiter">
							<div class="alert alert-success">
						  	<center><strong>Paciente Cadastrado com Sucesso!</strong></center>
						</div>
						<?php
						
					}
					else{
						?>
						<div class="alert alert-danger">
							<center><strong>Paciente já cadastrado</strong></center>
						</div>
						<?php
					}
				  session_destroy();
				}
				?>

				<form class="login100-form validate-form p-b-33 p-t-5" method="get" action="FUNCOES_CAD_PACIENTE.php">

					<div class="wrap-input100 validate-input" data-validate = "Obrigatorio Nome Completo">
						<input class="input100" type="text" name="nome" placeholder="Nome Completo">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Obrigatorio CPF">
						<input class="input100" type="text" name="cpf" placeholder="CPF">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Obrigatorio RG">
						<input class="input100" type="text" name="rg" placeholder="RG">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Obrigatorio CEP">
						<input class="input100" type="text" name="cep" placeholder="CEP">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = " Obrigatorio Data de Nasciento">
						<input class="input100" type="date" name="data_nascimento" placeholder="Data de Nasciento">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Cadastrar
						</button>
					</div>

				</form>
			</div>
		</div>

	</div>
		
 
	



</body>
</html>