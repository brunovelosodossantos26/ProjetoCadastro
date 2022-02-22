<?php

include './conexao/conexao.php';
include './script/password.php';

$mail = $_POST['mail'];
$senha = $_POST['senha'];


$sql = "INSERT INTO menbro (mail, senha) values ('$mail', sha1('$senha'))";
$insert = mysqli_query($conexao, $sql);

header('Location: ../index.php?msg=1');
?>