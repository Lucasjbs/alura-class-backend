<?php

require 'autoload.php';

$usuario = new App\Alura\User($_POST['nome'], $_POST['senha'], $_POST['genero']);
$contato = new App\Alura\Contact($_POST['email'], $_POST['endereco'], $_POST['cep'], $_POST['telefone']);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Cadastro</title>
</head>
<body>

<div class="mx-5 my-5">
<h1>Cadastro feito com sucesso.</h1>
<p><?php echo $usuario->getLastNameWithPronoun(); ?>, seguem os dados de sua conta:</p>
<ul class="list-group">
    <li class="list-group-item">Primeiro nome: <?php echo $usuario->getName(); ?></li class="list-group-item">
    <li class="list-group-item">Sobrenome: <?php echo $usuario->getLastName(); ?></li class="list-group-item">
    <li class="list-group-item">Usuário: <?php echo $contato->getUser(); ?></li class="list-group-item">
    <li class="list-group-item">Senha: <?php echo $usuario->getPassword(); ?></li class="list-group-item">
    <li class="list-group-item">Telefone: <?php echo $contato->getPhone(); ?></li class="list-group-item">
    <li class="list-group-item">Email: <?php echo $contato->getEmail(); ?></li class="list-group-item">
    <li class="list-group-item">Endereço: <?php echo $contato->getAddressCep(); ?></li class="list-group-item">
</ul>
</div>
</body>
</html>