<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>.::Rastreamento::.</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php 

$cod = $_POST['codigo']; //Recebe o código de rastreio digitado pelo usuário

$post = array('Objetos' => $cod); //Insere o código em um array

$ch = curl_init(); //Inicia CURL
	
	//Informa a URL e outras funções ao CURL
	curl_setopt($ch, CURLOPT_URL, "https://www2.correios.com.br/sistemas/rastreamento/resultado_semcontent.cfm");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($post));
		
$output = utf8_encode(curl_exec($ch)); //Acessa a URL e retorna a saída
		
	curl_close($ch); //Encerra o CURL
		
	echo $output; //Imprime a saída

?>

</body>
</html>
