<?php

include 'conexao.php';

$id =$_POST['id_user'];
$name =$_POST['name'];


$sql = "DELETE FROM users WHERE id_user = $id ";
$delete = mysqli_query($conexao, $sql);


header('Location: list_users.php?msg=2')
?>