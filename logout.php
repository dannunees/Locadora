<?php

session_start();

$_SESSION['nome'] = null;
$_SESSION['email'] = null;

session_destroy();

header("Location: cadastro.php#paralogin");

?>