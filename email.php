<?php
    $nome=$_POST['nome'];
    $whatsapp=$_POST['whatsapp'];
    $email=$_POST['email'];
    $aceite= implode(",", $_POST['aceite'] );
    $data=$_POST['data'];
    $data=date('d/m/Y', strtotime($data));
    $date=date("d/m/Y");
    $mensagem= 'Esta mensagem foi enviada através do formulário<br><br>';
    $mensagem.='<b>Nome: </b>'.$nome.'<br>';
    $mensagem.='<b>Whatsapp: </b>'.$whatsapp.'<br>';
    $mensagem.='<b>Pacote de Viagem: </b>'.$roteiro.'<br>';
    $mensagem.='<b>Número de pessoas: </b>'.$numero.'<br>';
    $mensagem.='<b>E-Mail:</b> '.$email.'<br>';
    $mensagem.='<b>Telefone:</b> '.$telefone.'<br>';
    $mensagem.='<b>Data da Viagem: </b>'.$data.'<br>';
    $mensagem.='<b>Data de envio:</b> '.$date.'<br>';
    $mensagem.='<b>Aceite:</b>'.$aceite.'<br>';
    
    require("phpmailer/src/PHPMailer.php");
    require("phpmailer/src/SMTP.php");
    require ("phpmailer/src/Exception.php");
 
$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP(); // Não modifique
    $mail->Host       = 'smtp.gmail.com';  // SEU HOST (HOSPEDAGEM)
    $mail->SMTPAuth   = true;                        // Manter em true
    $mail->Username   = 'reservas@rajalapao.com.br';   //SEU USUÁRIO DE EMAIL
    $mail->Password   = '@Rajalapao2';                   //SUA SENHA DO EMAIL SMTP password
    $mail->SMTPSecure = "tls";    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
    $mail->Port       = 587;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
    $mail->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO
    
    //Recipients
    $mail->Username = "ewaldbit@gmail.com"; // SMTP username
    $mail->Password = "*******"; // SMTP password
    $mail->From = "ewaldbit@gmail.com"; // From
    $mail->FromName = "Terabyte Software" ; // Nome de quem envia o email
    $mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
    $mail->WordWrap = 50; // Definir quebra de linha
    $mail->IsHTML = true ; // Enviar como HTML                
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contato Terabyte Software'; //ASSUNTO
    $mail->Body    = $mensagem;  //CORPO DA MENSAGEM
    $mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT
 
    // $mail->send();
    if(!$mail->Send()) {
        echo "<script>alert('Erro ao enviar o E-Mail');window.location.assign('index.html');</script>";
     }else{
        echo "<script>alert('E-Mail enviado com sucesso!');window.location.assign('index.html');</script>";
     }
     die
?>