<?php
  session_start();

  print_r($_SESSION);

  $name = isset($_SESSION['name']) ?$_SESSION['name'] : 'Guest';
  $email = isset($_SESSION['email']) ?$_SESSION['email'] : 'not subscribed.';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Sessions - Page 3</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <h1>Hello, <?php echo $name; ?>!</h1>
  <h1>Your email is <?php echo $email; ?>.</h1>
  <a href="page4.php">Go to Page 4</a>
</body>
</html>