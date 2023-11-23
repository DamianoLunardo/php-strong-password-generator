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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body>

<form method="GET" action="" class="form-group container mt-5 mb-5 d-flex  align-items-center gap-3">
  <label for="password-length">Lunghezza password (1-8):</label>
  <input type="number" id="password-length" name="length" min="1" max="8">
  <button class="btn btn-primary" type="submit">Genera password</button>
  <input class="btn btn-secondary" type="reset" value="Cancella" onclick="resetPassword()">
</form>

<?php
if(!empty($passwordGenerated)){
      echo "<h1 class='text-center' id='generated-password'>Password generata: $passwordGenerated</h1>";
  }
?>

<script>
  function resetPassword() {
    document.getElementById('generated-password').innerText = '';
  }
</script>

</body>
</html>
