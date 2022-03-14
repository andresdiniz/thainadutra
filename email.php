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

    /*echo "Olá $nome, muito bem vindo ao Cebrac, você se cadastrou para o curso de $curso. Aguarde o nosso contato!</br>";
    */
    $texto ="Nome: $nome</br> Email - $email;

    $sql = "INSERT INTO leads (ID, Nome, Email) VALUES (NULL, '$nome','$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Olá $nome, muito bem em breve voce recebera seu ebook gratuitamente no seu email</br>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    /*or die("ocorreu um erro e seus registros não foram inseridos");
    */
    ?>
</div>
</body>
</html>