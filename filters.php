<?php
  // Check for posted data
  if(filter_has_var(INPUT_POST, 'data')){
    echo 'Data found<br>';
  }else {
    echo 'No data found<br>';
  }

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

    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_EMAIL
    #FILTER_VALIDATE_FLOAT
    #FILTER_VALIDATE_INT
    #FILTER_VALIDATE_IP
    #FILTER_VALIDATE_REGEXP
    #FILTER_VALIDATE_URL

    #FILTER_SANITIZE_EMAIL
    #FILTER_SANITIZE_ENCODED
    #FILTER_SANITIZE_NUMBER_FLOAT
    #FILTER_SANITIZE_NUMBER_INT
    #FILTER_SANITIZE_SPECIAL_CHARS
    #FILTER_SANITIZE_STRING
    #FILTER_SANITIZE_URL

    // Validate an Int
    $var = 23;

    if(filter_var($var, FILTER_VALIDATE_INT)) {
      echo "$var is a number. <br>";
    } else {
      echo "$var is not a number.<br>";
    }

    // Sanitize an Int
    $var2 = '213jk328ssdf90';
    var_dump(filter_var($var2, FILTER_SANITIZE_NUMBER_INT));
    echo '<br>';

    // Sanitize special chars
    $var3 = '<script>alert(1)</script>';
    var_dump(filter_var($var3, FILTER_SANITIZE_SPECIAL_CHARS));
    echo '<br>';

    // Filter an array
    $filters = array(
      "data" => FILTER_VALIDATE_EMAIL,
      "data2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
          "min_range" => 1,
          "max_range" => 100
        )
      )
    );

    print_r(filter_input_array(INPUT_POST, $filters));

    // Filter a var
    $arr = array(
      "name" => "seth",
      "age" => "33",
      "email" => "seth@seth.com"
    );

    $filters2 = array(
      "name" => array(
        "filter" => FILTER_CALLBACK,
        "options" => "ucwords"
      ),
      "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
          "min_range" => 1,
          "max_range" => 120
        )
        ),
      "email" => array(
        "filter" => FILTER_VALIDATE_EMAIL
      )
    );

    print_r(filter_var_array($arr, $filters2));

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="data">
  <input type="text" name="data2">
  <button type="submit">Submit</button>
</form>