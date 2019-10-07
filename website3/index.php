<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <form method="post" action="index.php">
    <h1>Contact Us</h1>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>