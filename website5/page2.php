<?php
  setcookie('username', 'Superman', time() + (86400 * 30));

  // Delete Cookie
  // setcookie('username', 'Superman', time() - (3600));

  // Are there saved cookies?
  if(count($_COOKIE) > 0) {
    echo 'There are '.count($_COOKIE). ' cookies saved.';
  } else {
    echo 'There are no cookies saved.';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Cookies - Page 2</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h1>PHP Cookies - Page 2</h1>
    <?php if(isset($_COOKIE['username'])): ?>
    <h4> User <?php echo $_COOKIE['username']; ?> is set.</h4>
    <?php else: ?>
    <h4>User is not set.</h4>
    <?php endif; ?>
  <a href="page3.php">Go to Page 3</a>
  </div>
</body>
</html>