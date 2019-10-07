<?php
  if (isset($_POST['submit'])) {
    $username =htmlentities($_POST['username']);

    setcookie('username_cookie', $username, time()+3600); // set cookie for 1 hour

    header('Location: page2.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Cookies - Page 1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <h1>PHP Cookies- Page 1</h1>
      <div class="form-group">
        <label for="name">Username</label>
        <input type="text" class="form-control" name="name" placeholder="Username">
      </div>
      <button type="submit" name="submit" value="Submit" class="btn btn-primary mb-2">Submit</button>
    </form>
  <a href="page2.php">Go to Page 2</a>
  </div>
</body>
</html>