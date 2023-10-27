<?php

//Variáveis

$nome = $_POST['name'];

$email = $_POST['email'];

$tel = $_POST['tel'];

$subject = $_POST['subject'];

$mensagem = $_POST['message'];

$data_envio = date('d/m/Y');

$hora_envio = date('H:i:s');



//Compo E-mail

$arquivo = "

   

    $nome

    $email

    $mensagem

    Este e-mail foi enviado em $data_envio às $hora_envio

    telefone de contato $tel

  ";



//Emails para quem será enviado o formulário

$destino = "contato@romatecusinagem.com.br";

$assunto = "Contato pelo Site - " . $subject;



//Este sempre deverá existir para garantir a exibição correta dos caracteres

$headers  = "MIME-Version: 1.0\n";

$headers .= "Content-type: text/html; charset=iso-8859-1\n";

$headers .= "From: $nome <$email>";



//Enviar

if (mail($destino, $assunto, $arquivo, $headers)) {

  // Define a mensagem de confirmação

  $mensagem_confirmacao = "E-mail enviado com sucesso.";

  $mensagem_confirmacao_footer = $mensagem_confirmacao;

  $redirect_url = '../contact.php?msg=' . urlencode($mensagem_confirmacao) . '#contato';
} else {

  // Caso ocorra um erro no envio do e-mail, você pode definir uma mensagem de erro aqui

  $mensagem_confirmacao = "Ocorreu um erro ao enviar o e-mail.";

  $mensagem_confirmacao_footer = $mensagem_confirmacao;

  $redirect_url = '../contact.php?msg=' . urlencode($mensagem_confirmacao) . '#contato';
}



$_SESSION["mensagem_confirmacao_footer"] = $mensagem_confirmacao_footer;



// Redirect to the next page

header("Location: $redirect_url");

exit;
