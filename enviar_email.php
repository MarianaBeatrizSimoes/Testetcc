<?php
$mensagem_enviada = false;
$erro_envio = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['tel']);
    $mensagem = htmlspecialchars($_POST['msg']);

    // Destinatário e detalhes do e-mail
    $to = "ecobrieduque@gmail.com";
    $subject = "Contato de $nome";
    $body = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nMensagem:\n$mensagem\n";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Tentar enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        $mensagem_enviada = true;
    } else {
        $erro_envio = true;
    }
}
?>
