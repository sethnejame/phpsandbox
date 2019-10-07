<?php
  if (isset($_POST['submit'])) {
    session_start(); // Start the session

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: page2.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Sessions - Page 1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <h1>PHP Sessions - Page 1</h1>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="Email">
      </div>
      <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
    </form>
  <a href="page1.php">Go to Page 1</a>
  </div>
</body>
</html>