<?php
  session_start();

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Sessions - Page 2</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <h5>Thank you <?php echo $name; ?>.  You have subscribed with the email <?php echo $email; ?>.</h5>
</body>
</html>