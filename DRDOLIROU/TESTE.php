
	
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
<!--===============================================================================================-->
</head>
<body>

		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			

			<?php  include "MENU.php"; ?>

	
			<div class="wrap-login100 p-t-30 p-b-50">

				<span class="login100-form-title p-b-41">
					Cadastrar Diagnostico
				</span>

				<span class="login100-form-title p-b-21">
					<?php
						if (isset($_COOKIE['nome'])){
						$nome_cookie = $_COOKIE['nome'];

						if(isset($nome_cookie)){
						echo "Bem-Vindo: $nome_cookie";
						}
						}
					?>
				</span>	
			

					<form class="login100-form validate-form p-b-33 p-t-5" action="Upload_img.php" method="POST" enctype="multipart/form-data">
							
							<div class="container-login100-form-btn m-t-32">
								<?php 
									if (isset($_COOKIE['msg'])){

									$msg = $_COOKIE['msg'];

									if(isset($msg)){
										echo "<p> $msg </p>";
									}
								}
							?>


							</div>
							<div class="container-login100-form-btn m-t-32">

								<input type="file" name="arquivo">

							</div>
								
							<div class="wrap-input100 validate-input" data-validate = "Obrigatorio CPF">
								<input name="CPF" class="input100" type="text" placeholder="CPF">
								<span class="focus-input100" data-placeholder="&#xe82a;"></span>
							</div>
							<div class="container-login100-form-btn m-t-32">
									<input class="login100-form-btn" type="submit" id="pesqui_pacient" name="pesqui_pacient" value="Pesquisar Paciente">
								</div>

							<div class="wrap-input100 validate-input">
								<input name="nome_pacient" disabled="" class="input100" type="text" name="rg" 

								<?php 
								if(!isset($_COOKIE['habilita'])) {
									?>placeholder="Nome do Paciente"<?php
								}
								else{

									if($_COOKIE['habilita'] > 0) {
										?>placeholder="Nome do Paciente"<?php
									}
									else{
										 
										$Nome_Paciente = $_COOKIE['Nome_Paciente'];
										?>value = "<?php echo $Nome_Paciente;  ?>"<?php
									}
								}
							?>


								

								<span class="focus-input100" data-placeholder="&#xe82a;"></span>
							</div>

							<div class="container-login100-form-btn m-t-32">
								<input 
								<?php
								if(!isset($_COOKIE['habilita'])) { // verifica se o cookie_name está definido
								     ?>disabled=""<?php
								} else {
								    $hbl = $_COOKIE['habilita']; if($hbl < 0){  ?>  disabled="" <?php } else{ }?><?php
								}?>
								class="login100-form-btn" type="submit" value="Salvar" id="upload" name="upload">
							</div>
					</form>
				


				<form  class="login100-form validate-form p-b-33 p-t-5" action="TESTAR_IMGC.php" method="POST">

					<div class="container-login100-form-btn m-t-32">
							<input class="login100-form-btn" type="submit" name="teste_img" value="Pegar Diagnostico">
					</div>
				</form>
			</div>
		</div>
	</div>
		

</body>


</html>