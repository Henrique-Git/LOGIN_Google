<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>.::Rastreamento::.</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php 

$cod = $_POST['codigo'];

$post = array('Objetos' => $cod);
		// iniciar CURL
$ch = curl_init();
		// informar URL e outras funções ao CURL
	curl_setopt($ch, CURLOPT_URL, "https://www2.correios.com.br/sistemas/rastreamento/resultado_semcontent.cfm");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($post));
		// Acessar a URL e retornar a saída
$output = utf8_encode(curl_exec($ch));
		// liberar
	curl_close($ch);
		// Imprimir a saída
	echo $output;

?>

</body>
</html>
