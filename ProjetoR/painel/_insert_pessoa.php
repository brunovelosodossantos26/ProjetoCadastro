<?php

include './conexao/conexao.php';

$mail = $_POST['mail'];
$senha = $_POST['senha'];


$sql = "INSERT INTO menbro (mail, senha) values ('$mail','$senha')";
$insert = mysqli_query($conexao, $sql);


?>