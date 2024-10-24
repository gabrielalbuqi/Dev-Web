<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$celular = addcslashes($_POST['filme']);
$mensagem = addcslashes($_POST['formadepagamento']);

$para = "suporteascentgroup@gmail.com";
$assunto = "Contato do site";

$corpo = "Nome: " . $nome . "\n". "E-mail: " .$email."\n" ."Filme: " .$filme."\n". "Forma de pagamento: " .$formadepagamento;

$importante = "From: jg5900212@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Malier:PHP/".phpversion()

if(mail($para, $assunto, $corpo, $importante)){
    echo("Email enviado com sucesso!");
}else{
    echo("Falha ao enviar o email");
}

?>