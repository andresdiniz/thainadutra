<!doctype htlm>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <title>Google Glass - Cadastro </title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
    $nome = $_POST["tName"];
    $telefone = $_POST["tTel"];
    $sexo = $_POST["TSexo"];
    $curso = $_POST["tCurso"];

    echo "O nome é $nome e o sexo é $sexo e o numero de telefone é $telefone, seu curso é $curso;
?>
</div>
</body>
</html>