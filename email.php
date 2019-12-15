<?php

$email = $_POST["para"];
$subject = $_POST["assunto"];
$message = $_POST["mensagem"];
$fromName = $_POST["nome"];;
$fromMail = $_POST["de"];

$header = "MIME-Version: 1.0\r\n";
$header .= "From: $fromName <$fromMail>\r\n";
$header .= "Content-type: text/html; charset=utf-8" . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion ();
$result = mail ($email, $subject, $message, $header );

if ($result){
    echo "Enviado com sucesso!<br>";
}else{
    echo "Falha no envio do e-mail!<br>";
}

echo "<br><a href='index.php'>Voltar</a>";

?>