<?php
  session_start();

  session_destroy();

  unset($_SESSION['name']);

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Sessions - Page 4</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <h1>Hello, <?php echo $name; ?>!</h1>
  <h1>Your email is <?php echo $email; ?>.</h1>

</body>
</html>