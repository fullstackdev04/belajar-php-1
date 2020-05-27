<?php

session_start();

if (!empty($_POST)) {
  echo sprintf('%s', print_r($_POST, true));
}

echo session_id();
$_SESSION['cinta'] = 'sorry';
print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
    <label for="">username</label>
    <input type="text" name="username">
    <br>
    <label for="">password</label>
    <input type="password" name="password">

    <button type="submit">Finish</button>
</form>
</body>
</html>
