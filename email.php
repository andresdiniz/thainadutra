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
    $result = $agora->format("Y-m-d H:i:s");
    $mensagem = "<html><body><p><b>Segue mini curso solicitado.</b></p><p><i>Assita aos videos pelos links a seguir</i></p>
   <a href='https://fabricaderiqueza.com/mini-curso/'>Mini-curso</a>  
   <p>Gostou? Vagas são limitadas</p>
   <Button><a href='https://bit.ly/3tyDlyt'></a>Aproveite</Button>
   </body></html>";

    // $texto = Nome: $nome</br> Email: $email;
    $sql = "INSERT INTO leads (ID, Nome, Email, dataatual) VALUES (NULL, '$nome','$email','$result')";
 
// Fim enviar email

    if ($conn->query($sql) === TRUE) {
    include('check.html');
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sac@thainadutra.com.br";
    $to = $email;
    $subject = "Mini-curso";
    $message = "Olá $nome, parabéns você deu o primeiro passo para mudar a sua vida. Segue mini curso solicitado. Assita aos videos pelo link a seguir.
   https://fabricaderiqueza.com/mini-curso/  
   Curtiu? Vagas limitadas!!
   https://bit.ly/3tyDlyt. Não vai perder, ou vai? Aproveite!";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    /*or die("ocorreu um erro e seus registros não foram inseridos");
    */
    ?>
</div>
</html>