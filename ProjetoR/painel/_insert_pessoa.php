<?php

include './conexao/conexao.php';
include './script/password.php';

$mail = $_POST['mail'];
$senha = $_POST['senha'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$cpf = $_POST['cpf'];
$nivel = $_POST['nivel'];



$sql = "SELECT * FROM menbro WHERE mail = '$mail'";
$search = mysqli_query($conexao, $sql);


$total = mysqli_num_rows($search);

if ($total > 0) {
    header('Location: ../index.php?msg=3');
} else {
    $sql = "INSERT INTO menbro (mail, senha, id_menber_nivel, name, tel, cpf) values ('$mail', sha1('$senha'),$nivel, '$name','$tel','$cpf')";
    $insert = mysqli_query($conexao, $sql);
    header('Location: form_membro.php?msg=1');
};
