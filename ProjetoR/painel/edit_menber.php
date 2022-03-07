<?php

include 'conexao/conexao.php';



$mail = $_POST['mail'];
$name = $_POST['name'];
$id = $_POST['id'];
$tel = $_POST['tel'];
$cpf = $_POST ['cpf'];


$update = "UPDATE menbro SET mail='$mail',name='$name', tel='$tel', cpf='$cpf' WHERE id = $id";
$att = mysqli_query($conexao, $update);

header('Location: profile.php?msg=1');

?>