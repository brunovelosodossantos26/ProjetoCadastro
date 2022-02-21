<?php

include './conexao/conexao.php';

$id =$_POST['id_user'];
$name =$_POST['name'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$fone = $_POST['fone'];

$sql = "UPDATE `users` SET `nome`='$name',`cpf`='$cpf',`endereco`='$endereco',`cep`=$cep,`cidade`='$cidade',`estado`='$estado',`email`='$email',`fone`='$fone' WHERE id_user = $id ";
$insert = mysqli_query($conexao, $sql);


header('Location: list_users.php?msg=1')
?>