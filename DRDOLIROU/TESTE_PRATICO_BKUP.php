
//lembrar como faço o ciclo de upload, teste, entrega resultado, feedback resultado, anotar esse fluxo para n esquecer de novo seu pedaço de merda


<html>
<?php  include "MENU.php"; ?>
<span>
			<?php
			if (isset($_COOKIE['nome'])){
			$nome_cookie = $_COOKIE['nome'];

			if(isset($nome_cookie)){
			echo "Bem-Vindo, $nome_cookie";
			}
			}
			?>
			</span>

<span>
<?php 
		if (isset($_COOKIE['msg'])){

		$msg = $_COOKIE['msg'];

		if(isset($msg)){
			echo "<p> $msg </p>";
		}
	}
	
	
?>
</span>
<form action="Upload_img.php" method="POST" enctype="multipart/form-data">
	<input type="file" required name="arquivo">
	<br>
	<br>
	
	<input type="text" name="CPF" placeholder="CPF do Paciente"><br><br>

	<input type="text" name="nome_pacient" disabled="" placeholder="Nome do Paciente"> <input type="submit" id="pesqui_pacient" name="pesqui_pacient" value="Pesquisar Paciente">
	
	<br><br>
	<input type="submit" value="Salvar" id="upload" name="upload">

	<br>
</form>

<form action="TESTAR_IMG.php" method="POST">
	<input type="submit" name="teste_img" value="Pegar Diagnostico">
</form>

</html>
 
