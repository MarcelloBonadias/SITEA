<?php

$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'BDAlpha';

$conexao = mysqli_connect($servidor, $user, $password, $banco);



$email = $_POST ['email'];
$senha = $_POST ['senha'];


$sql = "SELECT * FROM tb_professor where nm_email = '$email'";
$seach = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($seach);

$emailBanco = $array['nm_email'];
$senhaBanco = $array['nm_senha'];

if($emailBanco == $email && $senhaBanco == $senha){
header("Location:telainicial.php");
}
else if($email == null && $senha == null){
    header("Location:login.php?msg=1");
    mysql_close();

}
else{
    header("Location:telainicial.php?msg=1");
    mysql_close();
}
