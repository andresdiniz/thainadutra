<?php
$servername = "localhost";/*"Mysql#.000webhost.com"; /* LETRA INICIAL MAUIUSCULA*/
    $username = "u335174317_thainadutra"; /*"id17543421_admandre";*/
    $password = "30012022@ndrE"; /*jJ7AKrr&gLwm_%cd*/
    $banco = "u335174317_leads";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$banco);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>
