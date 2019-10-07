<?php
  // Message Vars
  $msg = '';
  $msgClass = '';

  if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    // Check Required fields
    if (!empty($email) && !empty($name) && !empty($message)) {
      //passed
      echo 'Passed!';
    } else {
      //failed
      $msg = "Please fill in all fields";
      $msgClass = 'alert-danger';
    };
  }
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
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Contact Us</a>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <?php if($msg != ''): ?>
      <div class="<?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <h1>Contact Us</h1>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="" name="name" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" value="" name="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" placeholder="Leave a message. . .">
        </textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>