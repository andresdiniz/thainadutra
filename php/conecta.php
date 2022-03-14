<?php
$servername = "localhost";/*"Mysql#.000webhost.com"; /* LETRA INICIAL MAUIUSCULA*/
    $username = "id17543421_cebracadm"; /*"id17543421_admandre";*/
    $password = "3Ml*@~LC83-5Rrz@"; /*jJ7AKrr&gLwm_%cd*/
    $banco = "id17543421_cebrac";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$banco);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>