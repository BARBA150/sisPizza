<?php
$nome = $_POST['nome']; 
$endereco = $_POST['endereco']; 
$email = $_POST['email']; 
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$data = $_POST['data_nascimento'];
$sexo = $_POST['sexo']; 
$senha = $_POST['password'];

echo "Nome: " . $nome ."<br/>" . "Endereço: " . $endereco . "<br/>" . "E-mail: ". $email . "<br/>" . "Telefone: " . $telefone . "<br/>" . "CPF: " . $cpf ."<br/>" . "RG: " . $rg . "<br/>" . "Data de Nascimento: ". $data . "<br/>" . "Sexo: " . $sexo;
?>