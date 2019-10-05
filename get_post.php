<?php
  // $_GET is an array . . .data is sent in the URL of the HTTP req
  if(isset($_GET['name'])) {
    $name = htmlentities($_GET['name']);
    echo $name;
  }
  // $_POST is an array . . .data is sent in the body of the HTTP req
  if(isset($_POST['name'])) {
    $name = htmlentities($_POST['name']);
    echo $name;
  }
  // $_REQUEST is an array(SUPERGLOBAL)- data from the HTTP req can be retrieved for any method (GET/POST)
  if(isset($_REQUEST['name'])) {
    $name = htmlentities($_REQUEST['name']);
    echo $name;
  }

  // $_SERVER is an array(SUPERGLOBAL)-
  echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get/Post</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h1>Info Form</h1>
  <form method="POST" action="get_post.php">
    <div class="form-group">
      <label for="name">Name</label><br>
      <input class="form-control" type="text" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="email">E-mail</label><br>
      <input class="form-control" type="email" name="email" placeholder="Enter email">
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
  </form>
  <ul>
    <li>
      <a href="get_post.php?name=Seth">Seth</a>
      <a href="get_post.php?name=Natalie">Natalie</a>
      <a href="get_post.php?name=Charlie">Charlie</a>
    </li>
  </ul>
  <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>