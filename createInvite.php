<?php
session_start();
include_once('conexao.php');

//Pega as informações da página e faz a pesquisa no BD
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$player = "player@email.com"; //Jogador cadastrado que enviou o convite.
$playerplace = "PlayerPlace";
$playerplaceEmail = "no-reply@playerplace.com";

$result_player = "SELECT COUNT(*) FROM players WHERE email='$email'";
$resultado_player = mysqli_query($conn, $result_player);

//Retorna o numero de linhas da pesquisa acima
$row = $resultado_player->fetch_row();

//Verificar se o email ja esta cadastrado na rede social
if($row[0] > 0){
    $_SESSION['msg'] = "O email '$email' ja esta cadastrado!";
    header("Location: view/sendInvite.php");
    
}else{
    //Chave criptografada para fazer o cadastro
    $token = md5(md5($player)); //Usando MD5 apenas para teste e apresentação
    
    //Tempo de 24 horas para o convite expirar
    $expires = new DateTime('America/Sao_Paulo');
    $expires->add(new DateInterval('PT24H')); // 24 hour
    $aux_data = $expires->format('Y-m-d H:i:s');
    
    //Deletar qualquer outro token de convite que tenha o email convidado
    //O comando certo seria INATIVAR aquele convite atraves de uma variavel boolean
    $result_invite = "DELETE FROM sendinvites WHERE emailInvite='$email'";
    $resultado_invite = mysqli_query($conn, $result_invite);
    
    //Enviar email e depois salvar no banco
    $assunto = "Convite para cadastro no PlayerPlace";
    $linkRegister = "http://localhost/playerplace.com/view/register.php?token='$token'&email='$player'";
    echo $linkRegister;
    
    //No arquivo, pode elaborar uma página html, para ficar parecido com os emails empresariais e mais estiloso.
    $arquivo = "
        Você foi convidado a participar da rede social playerplace!\n Quem te convidou foi o '$player', que ja faz parte da PlayerPlace!\n
        Acesse o link para ser redirecionado a página de cadastro!\n\n
        '$linkRegister'\n
        Nao responda a esse email!\n
    ";
    
    $headers = 'From: $playerplace <$playerplaceEmail>';
     
    //mail php não funciona em servidor local (localhost) no Win10, precisa ser numa versão de servidor do Windows ou Servidor em Nuvem.
    //$enviaremail = mail($email, $assunto, $arquivo, $headers);
    
    //if($enviaremail){
        //Salva o token no BD
        $insert_invite = "INSERT INTO sendInvites (emailPlayer, emailInvite, token, expiresDate)
                    VALUES ('$player','$email','$token','$aux_data')";
        $resultado_invite = mysqli_query($conn, $insert_invite);
    //}
    
    
    
    
    
}
?>