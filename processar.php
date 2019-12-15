<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "registro";

$conexao = mysqli_connect($hostname, $username, $password, $database);

$nome = $_POST['nome_cad'];
$senha = $_POST['senha_cad'];
$email = $_POST['email_cad'];

if(isset($_POST['cadastrar'])){
    $sql = mysqli_query($conexao, "insert into cadastro values ('$nome', '$email', '$senha')");
    echo "Dados cadastrados!";
}

?>