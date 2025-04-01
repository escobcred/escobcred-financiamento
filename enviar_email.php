<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["name"]);
    $telefone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["message"]);

    $destinatario = "edson@escobcred.com.br";
    $assunto = "Novo contato do site";
    $corpo_email = "Nome: $nome\nTelefone: $telefone\nE-mail: $email\n\nMensagem:\n$mensagem";
    
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($destinatario, $assunto, $corpo_email, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>
