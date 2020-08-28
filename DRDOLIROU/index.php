
<!DOCTYPE html>
<?php 

if(!isset($_COOKIE['nome'])) { // verifica se o cookie_name está definido
     echo "O cookie 'nome' não está definido!<br>";
} else {
     setcookie(nome, '', time()-3600);
}

if(!isset($_COOKIE['id'])) { // verifica se o cookie_name está definido
     echo "O cookie 'id' não está definido!<br>";
} else {
	
     setcookie(id, '', time()-3600);
}
if(!isset($_COOKIE['Nome_Paciente'])) { // verifica se o cookie_name está definido
     echo "O cookie 'Nome_Paciente' não está definido!<br>";
} else {
	
     setcookie(Nome_Paciente, '', time()-3600);
}
if(!isset($_COOKIE['habilita'])) { // verifica se o cookie_name está definido
     echo "O cookie 'habilita' não está definido!<br>";
} else {
	
     setcookie(habilita, '', time()-3600);
}

if(!isset($_COOKIE['msg'])) { // verifica se o cookie_name está definido
     echo "O cookie 'msg' não está definido!<br>";
} else {
	
     setcookie(msg, '', time()-3600);
}


if(!isset($_COOKIE['ID_PACIENTE'])) { // verifica se o cookie_name está definido
     echo "O cookie 'ID_PACIENTE' não está definido!<br>";
} else {
	
     setcookie(ID_PACIENTE, '', time()-3600);
}




?>
<html lang="en">
<head>
	<title>Login Albert einstein</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	//falta terminar o fluxo da tela de salvar novo diagnostico (Pesquisar CPF > Caso exista liberar botão para salvar > caso não exista deixa bloqueado )
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="get" action="FUNCOES.php">
					<span class="login100-form-title">
						Hospital Albert einstein
					</span>
					
					<div class="wrap-input100 " >
						<input class="input100" type="text" name="Usuario" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						

						<input class="login100-form-btn" type="submit" value="Login" id="entrar" name="entrar">
					</div>
				
					<div class="text-center p-t-12">
						<span class="txt1">
							Esqueceu
						</span>
						<a class="txt2" href="#">
							Usuario ou Senha?
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>