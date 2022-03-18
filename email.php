<!doctype htlm>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <title>Fabrica de Riqueza </title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
    <?php
    include ('conecta.php');
    $nome = $_POST["tnome"];
    $email = $_POST["temail"];
    
    $timezone = new DateTimeZone("America/Sao_Paulo");
    $agora = new DateTime('now', $timezone);
    $result = $agora->format("Y-m-d H:i:s ");

    // $texto = Nome: $nome</br> Email: $email;
    $sql = "INSERT INTO leads (ID, Nome, Email, dataatual) VALUES (NULL, '$nome','$email','$result')";
    
    if ($conn->query($sql) === TRUE) {
      include('check.html');
      // ENviar email..

          use PHPMailer\PHPMailer\PHPMailer;
          require 'vendor/autoload.php';
          $mail = new PHPMailer;
          $mail->isSMTP();
          $mail->SMTPDebug = 2;
          $mail->Host = 'smtp.hostinger.com';
          $mail->Port = 587;
          $mail->SMTPAuth = true;
          $mail->Username = 'sac@thainadutra.com.br';
          $mail->Password = '30012022@ndrE';
          $mail->setFrom('sac@thainadutra.com.br', 'Thaina');
          $mail->addReplyTo('no-reply@thainadutra.com.br', 'Nao responda');
          $mail->addAddress($email, $nome);
          $mail->Subject = 'Testing PHPMailer';
          //$mail->msgHTML(file_get_contents('message.html'), __DIR__);
          $mail->Body = 'This is a plain text message body';
          //$mail->addAttachment('test.txt');
          if (!$mail->send()) {
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
              echo 'The email message was sent.';
          }

// Fim enviar email
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    /*or die("ocorreu um erro e seus registros não foram inseridos");
    */
    ?>
</div>
</html>