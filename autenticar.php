<?php

#$email = $_POST


session_start();

# $_ é um préfixo de variaveis de ambiente do PHP.

$email = $_POST['email_login'];
$senha = $_POST['senha_login'];

echo "$email ------ $senha";



$hostname = "localhost";
$username = "root";
$password = "";
$database = "registro";

$conexao = mysqli_connect($hostname, $username, $password, $database);


if(isset($_POST['email_login']) && isset($_POST['senha_login'])){

    $sql = mysqli_query($conexao, " select 
                                        nome, email, senha
                                    from cadastro 
                                    where email = '$email' and senha = '$senha' ");

    #var_dump($sql);

    echo '<hr/>---> '.$sql->num_rows.'<hr/>';

    if($sql->num_rows == 0) {
        #echo "Usuario ou senha invalidos!";

        header('Location: unauthorized.php');
    }
    else {
        $row = $sql->fetch_row();

        echo "Bem vindo ".$row[0];

        $_SESSION['nome'] = $row[0];
        $_SESSION['email'] = $row[1];

        header('Location: home.php');
    }

    /*
    while ($row = $sql->fetch_row()) {
        printf ($row[0], $row[1]);                   //echo print printf print_r var_dump
    }
    */

    /*
    echo "<hr/>";
    #while = enquanto
    $i = 0;
    while($i <= 10){
        echo 'valor '.$i.'<br/>';
        $i++; // $i = $i + 1
    }
    */
}

?>