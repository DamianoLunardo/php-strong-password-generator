<!-- Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php -->

<?php

function randomPassword(){
    $maxCrt = 2;
  
    $lowerCase = "abcdefghijklmnopqrstuvwxyz";
    $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $symbols = "!@#$%^&*";
  
    $lowerCase = str_shuffle($lowerCase);
    $upperCase = str_shuffle($upperCase);
    $numbers = str_shuffle($numbers);
    $symbols = str_shuffle($symbols);
  
    $randomPassword = substr($lowerCase, 0, $maxCrt);
    $randomPassword .= substr($upperCase, 0, $maxCrt);
    $randomPassword .= substr($numbers, 0, $maxCrt);
    $randomPassword .= substr($symbols, 0, $maxCrt);
  
    return  str_shuffle($randomPassword);
 }

//  echo randomPassword();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
<h1> <?php echo randomPassword(); ?>  </h1>

</body>
</html>
