<!doctype htlm>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <title>Fabrica de Riqueza </title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $nome = $_POST["tnome"];
    $email = $_POST["temail"];
    
    $timezone = new DateTimeZone("America/Sao_Paulo");
    $agora = new DateTime('now', $timezone);
    $result = $agora->format("Y-m-d H:i:s");
    // $texto = Nome: $nome</br> Email: $email;
      include('check.html');
              $mail->isSMTP();
              $mail->Host = 'smtp.hostinger.com';
              $mail->Port = 587;
              $mail->SMTPSecure = 'tls';
              $mail->SMTPAuth = true;
              $mail->Username = 'sac@thainadutra.com.br';
              $mail->Password = '30012022@ndrE';
              $mail->setFrom('sac@thainadutra.com.br', 'Thaina Dutra');
              $mail->addReplyTo('no-reply@thainadutra.com.br', 'Nao responda');
              $mail->addAddress($email, $nome);
              $mail->Subject = 'Mini curso';
              $mail->Priority = 1; 
              $mail->Body =  html_entity_decode("<html><body><p><b>Segue mini curso solicitado.</b></p><p><i>Assita aos videos pelos links a seguir</i></p><a href='https://fabricaderiqueza.com/mini-curso/'>Mini-curso</a> <p>Gostou? Vagas são limitadas</p><Button><a href='https://bit.ly/3tyDlyt'></a>Aproveite</Button> </body></html>");
              $mail->IsHTML(true); 
              $mail->Body = 'https://thainadutra.com.br/mensage.html';
              //$mail->addAttachment('test.txt');
              if (!$mail->send()) {
                  echo 'Mailer Error: ' . $mail->ErrorInfo;
              } else {
                  echo 'The email message was sent.';
              }
     
    ?>
</div>
</html>