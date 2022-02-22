<?php
include './painel/conexao/conexao.php';
include './painel/script/password.php';

$mail = $_POST['mail'];
$senha = $_POST['senha'];//menbro


$sql = "SELECT * FROM  menbro WHERE mail = '$mail' ";
$search = mysqli_query($conexao, $sql);

$array = mysqli_fetch_array($search);

$senhaBase = $array['senha'];//database

$senhaEnc = sha1($senha);//encripitando senha do menbro

if($senhaEnc == $senhaBase ){
    header('Location: ./painel/index.php');
} else{
   header('Location: index.php?msg=2');
}


?>