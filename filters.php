<?php
  // Check for posted data
  // if(filter_has_var(INPUT_POST, 'data')){
  //   echo 'Data found<br>';
  // }else {
  //   echo 'No data found<br>';
  // }

  // Validate an email submission
  if(filter_has_var(INPUT_POST, 'data')){
    $email = $_POST['data'];

    // Remove illegal chars (sanitize email)
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo 'Email is valid<br>';
    } else {
      echo 'Email is not valid<br>';
    };
  }
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="data">
  <button type="submit">Submit</button>
</form>