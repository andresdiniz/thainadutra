<?php
ini_set('display_errors',1);
error_reporting( E_ALL );
$from ="sac@thainadutra.com.br";
$to = $email;
$subject = "Curso gratuito";
$message = message.html;
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Email enviado corretamente"
?>
