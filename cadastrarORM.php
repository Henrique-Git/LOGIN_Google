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