<?php

session_start();

# $_ é um préfixo de variaveis de ambiente do PHP.

$nome = $_POST['txtNome'];


$hostname = "localhost";
$username = "root";
$password = "";
$database = "registro";

$conexao = mysqli_connect($hostname, $username, $password, $database);


$retorno = array();


$sql = mysqli_query($conexao, " select 
                                    nome, email, senha
                                from cadastro 
                                where nome = '$nome' ");


if($sql->num_rows == 0) {
    $retorno = array(
        "status" => false
    );
}
else {
    $row = $sql->fetch_row();

    $retorno = array(
        "status" => true,
        "nome" => $row[0],
        "email" => $row[1],
        "senha" => $row[2]
    );
}


echo json_encode($retorno, JSON_NUMERIC_CHECK);

?>