<?php
  $name = '';
  $password = '';
  $gender = '';
  $color = '';
  $languages = [];
  $comments = '';
  $terms = '';


  if (isset($_POST['submit'])) {
    $ok = true; // form validation

    if (!isset($_POST['name']) || $_POST['name'] === '') { // isset checks to see if the referenced var has a value
      $ok = false;
    } else {
      $name = $_POST['name'];
    };
    if (!isset($_POST['password']) || $_POST['password'] === '') { // validations. . .if isset is NOT set, or contains an empty string
      $ok = false;
    } else {
      $password = $_POST['password'];
    };
    if (!isset($_POST['gender']) || $_POST['gender'] === '') {
      $ok = false;
    } else {
      $gender = $_POST['gender'];
    };
    if (!isset($_POST['color']) || $_POST['color'] === '') {
      $ok = false;
    } else {
      $color = $_POST['color'];
    };
    if (!isset($_POST['languages']) || !is_array($_POST['languages'])
        || count($_POST['languages'] === 0)) {
      $ok = false;
    } else {
      $languages = $_POST['languages'];
    };
    if (!isset($_POST['comments']) || $_POST['comments'] === '') {
      $ok = false;
    } else {
      $comments = $_POST['comments'];
    };
    if (!isset($_POST['terms']) || $_POST['terms'] === '') {
      $ok = false;
    } else {
      $terms = $_POST['terms'];
    };

    if ($ok) { // don't print unless form's been validated
    printf('User name: %s
      <br>Password: %s
      <br>Gender: %s
      <br>Color: %s
      <br>Language(s): %s
      <br>Comments: %s
      <br>Terms: %s',
        htmlspecialchars($name, ENT_QUOTES), // htmlspecialchars protects us from cross-site scripting (XSS)
        htmlspecialchars($password, ENT_QUOTES), // this is called 'html escaping'
        htmlspecialchars($gender, ENT_QUOTES),
        htmlspecialchars($color, ENT_QUOTES),
        htmlspecialchars(implode(' ', $languages), ENT_QUOTES), // implode splits an array into strings
        htmlspecialchars($comments, ENT_QUOTES),
        htmlspecialchars($terms, ENT_QUOTES));
    } 
  }

?>

<form
  action=""
  method="post"
  >
  <label>User name:</label>
  <input type="text" name="name" value="<?php
    echo htmlspecialchars($name, ENT_QUOTES);
    ?>"><br>

  <label>Password:</label>
  <input type="password" name="password"><br>

  <label>Gender:</label>
  <input type="radio" name="gender" value="male"<?php
      if ($gender === 'male') {
        echo ' checked';
      }
    ?>> Male
  <input type="radio" name="gender" value="female"<?php
      if ($gender === 'female') {
        echo ' checked';
      }
    ?>> Female
  <input type="radio" name="gender" value="other"<?php
      if ($gender === 'other') {
        echo ' checked';
      }
    ?>> Other<br>

  <label>Favorite Color:</label>
  <select name="color">
    <option value=''>Please select</option>
    <option value='green'<?php
      if ($color === 'green') {
        echo ' selected';
      }
    ?>>Green</option>
    <option value='red'<?php
      if ($color === 'red') {
        echo ' selected';
      }
    ?>>Red</option>
    <option value='blue'<?php
      if ($color === 'blue') {
        echo ' selected';
      }
    ?>>Blue</option>
  </select><br>

  <label>Languages spoken:</label>
  <select name="languages[]" multiple size="3">
    <option value="english"<?php
      if (in_array('english', $languages)) {
        echo ' selected';
      }
    ?>>English</option>
    <option value="french"<?php
      if (in_array('french', $languages)) {
        echo ' selected';
      }
    ?>>French</option>
    <option value="swedish" <?php
      if (in_array('swedish', $languages)) {
        echo ' selected';
      }
    ?>>Swedish</option>
  </select><br>

  <label>Comments:</label>
  <textarea name="comments"><?php
    echo htmlspecialchars($comments, ENT_QUOTES);
    ?></textarea><br>

  <label>Terms & Conditions</label>
  <input type="checkbox" name="terms" value="ok"<?php
    if ($tc === 'ok') {
      echo ' checked';
    }
    ?>>I accept the T&C<br>

  <input type="submit" name="submit" value="Register">
</form>
