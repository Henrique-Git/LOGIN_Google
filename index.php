<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>.::LOGIN::.</title>
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
		<h1 style="text-align: center; color: #3A5FCD; text-shadow: 2px 2px 2px #000;">
			<strong>LOGIN</strong> 
		</h1>
		<br>

		<div class="login">
			<form style="width: 30%; margin-left: 35.5%; font-size: 16px; color: #3A5FCD;">

				<label>ID</label><input type="text" class="form-control" name="id" id="id"><br>
				<label>Nome</label><input type="text" class="form-control" name="name" id="name"><br>
				<label>E-mail</label><input type="text" class="form-control" name="user" id="email"><br>


				<input type="submit" class="btn btn-block btn-primary" name="entrar">
 			</form>
		</div>
		<br>

		<div style="width: 100%; text-align: center;">
			<label class="g-signin2" data-onsuccess="onSignIn"></label>
		</div>

		<script language="JavaScript" type="text/Javascript">

		function onSignIn(googleUser) {
			
			var profile = googleUser.getBasicProfile(); //Busca as Informações do perfil Logado
			var user_id = profile.getId(); //Busca o ID do perfil
			var user_name = profile.getName(); //Busca o Nome do Perfil
			var user_email = profile.getEmail(); //Busca o E-mail do Perfil

			if (user_name !== '') {

				var dados = { //Salva todos os dados buscados em uma variável
					user_id: user_id,
					user_name: user_name,
					user_email: user_email
				};

				$.post('cadastrarORM.php', dados); //Envia a variável para que os dados sejam inseridos no BD
			}
		document.getElementById('id').value = user_id; //Apresenta o valor recuperado no campo ID
		document.getElementById('name').value = user_name; //Apresenta o valor recuperado no campo Nome
		document.getElementById('email').value = user_email; //Apresenta o valor recuperado no campo E-mail

    	}

  		</script>	
</body>
</html>