<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $lider = addslashes($_POST['lider']);
    $setor = addslashes($_POST['setor']);
    $classificacao = addslashes($_POST['classific']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);


$destino = "diariode_bordo@hres.org.br";
$assunto = 'CONTATO - Diario de Bordo - HRES';

$body =
        'Nome:' .$nome. "\n".
        'E-mail:' .$email. "\n".
        'Setor: ' .  $setor. "\n".
        'Liderança: ' .  $lider. "\n".
        'Classificação: '. $classificacao. "\n".
        'Mensagem: ' .$mensagem;





$header = 'From: '.$email. "\n";


if (mail($destino, $assunto, $body, $header)) {
    echo '<script>alert("Solicitação enviada. Aguarde Retorno!"); window.location="http://www.hres.org.br/";</script>';

}else{
    echo '<script>alert("E-mail não pode ser enviado. Tente novamente!");</script>';
}
}

?>