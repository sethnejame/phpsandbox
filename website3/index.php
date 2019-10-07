<?php
  // Message Vars
  $msg = '';
  $msgClass = '';

  if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $email = htmlspecialchars($_POST['email']);
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Check Required fields
    if (!empty($email) && !empty($name) && !empty($message)) {
      // Check email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = "Invalid Email Address";
        $msgClass = 'alert-danger';
      } else {

        // Email validation passed, send an email
        $toEmail = 'seth@mondido.com';
        $subject = 'Contact Request From '.$name;
        $body = '<h2>Contact Requests</h2>
                  <h4>Name</h4><p>'.$name.'</p>
                  <h4>Email</h4><p>'.$email.'</p>
                  <h4>Message</h4><p>'.$message.'</p>';
        // Email Headers
        $headers = "MIME-Versoin: 1.0" ."\r\n"; // carriage return (email headers formatting)
        $headers = "Content-Type:text/html;charset=UTF-8" . "\r\n";

        // Additional Headers
        $headers = "From: " .$name. "<".$email.">". "\r\n";

        // Try to send email, report status if success/fail
        if(mail($toEmail, $subject, $body, $headers)) {
          $msg = "Your email was sent successfully.";
          $msgClass = 'alert-success';
        }else{
          $msg = "Your email wasn't sent!";
          $msgClass = 'alert-danger';
        }
      }
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
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <h1>Contact Us</h1>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '' ?>" name="name" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>" name="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>