<!doctype htlm>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <title>Fabrica de Riqueza </title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <header>
         <h1><strong>Fabrica de Riqueza</strong></h1>
      </header>
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
      include('sendemail.php');
        // echo "Olá $nome, muito bem em breve você recebera seu ebook gratuitamente no seu email.$result</br>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    /*or die("ocorreu um erro e seus registros não foram inseridos");
    */
    ?>
</div>
</body>
</html>