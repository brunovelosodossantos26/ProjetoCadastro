<?php 

include 'conexao/conexao.php';
include 'script/password.php';

$senha = $_POST['senha'];
$id = $_POST['id'];

$update = "UPDATE menbro SET senha = sha1('$senha') WHERE id = $id";
$att = mysqli_query($conexao, $update);

header('Location: profile.php?msg=1');



?>
