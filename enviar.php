<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $assunto = $_POST['subject'];
    $mensagem = $_POST['message'];

    $to = "ricardojfrancisco@protonmail.com";
    $subject = "Mensagem do site: $assunto";
    $body = "Nome: $nome\nEmail: $email\nAssunto: $assunto\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>
