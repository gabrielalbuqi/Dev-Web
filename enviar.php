<?php
// Obtém os dados do formulário usando o método POST e escapa caracteres especiais para evitar problemas de segurança
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$filme = addslashes($_POST['Filme']);
$formadepagamento = addslashes($_POST['Forma de pagamento']);

// Define o endereço de e-mail para onde a mensagem será enviada
$para = "suportplayfilmes@gmail.com";

// Define o assunto do e-mail
$assunto = "Contato do site";

// Monta o corpo do e-mail com as informações recebidas do formulário
$corpo = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Filme: " . $filme . "\n" . "Forma de pagamento: " . $formadepagamento;

// Define os cabeçalhos do e-mail, incluindo o endereço do remetente e a versão do PHP utilizada
$headers = "From: jg5900212@gmail.com" . "\n" . "Reply-to: " . $email . "\n" . "X-Mailer: PHP/" . phpversion();

// Envia o e-mail usando a função mail(). Se o envio for bem-sucedido, exibe uma mensagem de sucesso. Caso contrário, exibe uma mensagem de erro.
if (mail($para, $assunto, $corpo, $headers)) {
    echo("Email enviado com sucesso!");
} else {
    echo("Falha ao enviar o email");
}
?>
