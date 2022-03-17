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
    $result = $agora->format("d-m-Y");

    // $texto = Nome: $nome</br> Email: $email;
    // echo $texto;
    $sql = "INSERT INTO leads (ID, Nome, Email, dataatual) VALUES (NULL, '$nome','$email',$result)";
    
    if ($conn->query($sql) === TRUE) {
      include('check.html');
        // echo "Olá $nome, muito bem em breve você recebera seu ebook gratuitamente no seu email.$result</br>";
        use PHPMailer\PHPMailer\PHPMailer;
        require 'vendor/autoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@thainadutra.com.br';
        $mail->Password = '30012022@ndrE';
        $mail->setFrom('no-reply@thainadutra.com.br', 'Ebook');
        $mail->addReplyTo('sac@thainadutra.com.br', 'Sac');
        $mail->addAddress($email, $nome);
        $mail->Subject = 'Ebook gratuito';
        $mail->msgHTML(file_get_contents('message.html'), __DIR__);
        $mail->Body = 'This is a plain text message body';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    /*or die("ocorreu um erro e seus registros não foram inseridos");
    */
    ?>
</div>
</html>