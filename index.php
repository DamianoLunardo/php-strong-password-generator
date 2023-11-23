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

<form method="GET" action="" id="password-form">
  <label for="password-length">Lunghezza password (1-8):</label>
  <input type="number" id="password-length" name="length" min="1" max="8">
  <button type="submit">Genera password</button>
  <input type="reset" value="Cancella" onclick="resetPassword()">
</form>

<?php
if(!empty($passwordGenerated)){
      echo "<h1 id='generated-password'>Password generata: $passwordGenerated</h1>";
  }
?>

<script>
  function resetPassword() {
    document.getElementById('generated-password').innerText = '';
  }
</script>

</body>
</html>
