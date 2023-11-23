<?php
include 'functions.php';

$passwordGenerated = "";
if(isset($_GET['length'])){
    $passwordLength = $_GET['length'];
    $passwordGenerated = randomPassword($passwordLength);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>

<form method="GET" action="">
  <label for="password-length">Lunghezza password (1-8):</label>
  <input type="number" id="password-length" name="length" min="1" max="8">
  <button type="submit">Genera password</button>
</form>

<?php
if(!empty($passwordGenerated)){
      echo "<h1>Password generata: $passwordGenerated</h1>";
  }
?>
</body>
</html>
