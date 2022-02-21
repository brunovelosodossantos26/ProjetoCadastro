<?php
include 'conexao.php';

$name = $_POST['name'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$fone = $_POST['fone'];

$sql = "INSERT INTO users (nome,cpf,endereco,cep,cidade,estado,email,fone) values('$name','$cpf','$endereco','$cep','$cidade','$estado','$email','$fone')";
$insert = mysqli_query($conexao, $sql);

header('Location: form_user.php?msg=1');
?>