<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>.::Página Inicial::.</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<script src="jquery-3.5.1.js"></script>

	<meta name="google-signin-client_id" content="121885014852-4ecpfadp410a1mqkrr0i9akh3ng8mnh7.apps.googleusercontent.com">

</head>
<body>

	<div style="background-color: #3A5FCD; text-align: center; height: 120px;" class="topo">
		<img style="height: 160%;" src="Imagens/topo_aula10.png" alt="Topo">
	</div>

	<br><br><br>
	
	<div class="Rastreio" style="padding: 20px; text-align: center;">

		<fieldset>
			<legend style="text-align: center; color: #3A5FCD;"><strong>Rastreamento de Mercadorias</strong></legend><br>
			<form style="width: 30%; margin-left: 35.5%;" action="resultado_rastreio.php" method="post">
				<input type="text" name="codigo" class="form-control" placeholder="Código"><br>
				<input type="submit" class="btn btn-block btn-primary" name="envio" value="Buscar">
			</form>
		</fieldset>
	</div>
	<br><br>

	<div class="Retorno" style="font-family: verdana; font-size: 16px; text-align: center;">
		<a href="index.php">
			>>VOLTAR<<
		</a>
	</div>

<?php 

require 'rb.php'; //Conecta ao código do ORM

R::setup('mysql:host=localhost;dbname=banco_login','root',''); //Conexão ao Banco de Dados

$user_id = filter_input(INPUT_POST, 'user_id'); //Busca o ID do usuário na variável 'dados' 
$user_name = filter_input(INPUT_POST, 'user_name'); //Busca o Nome do usuário na variável 'dados'
$user_email= filter_input(INPUT_POST, 'user_email'); //Busca o E-mail do usuário na variável 'dados'

$save = R::dispense('usuario'); // Cria um objeto 'usuario' dentro do BD

//Cria os atributos da tabela do BD e associa as variáveis à eles
$save->user_id = $user_id;
$save->user_name = $user_name;
$save->user_email = $user_email;

R::store($save); //Guarda as informações dentro do BD

?>
</body>
</html>
