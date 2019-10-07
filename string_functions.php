<?php
  # substr()
  # Returns a portion of a string

  $output = substr('Hello', 1);
  echo $output;
  echo '<br>';

  # strlen()
  # Returns length of a string

  $output = strlen('Hello World');
  echo $output;
  echo '<br>';

  # strpos()
  # Finds position of first occur. of spec. substring

  $output = strpos('Hello World', 'o');
  echo $output;
  echo '<br>';

  # trim()
  # Strips whitespace

  $output = trim('Hello World             ');
  echo $output;
  echo '<br>';

  # strtoupper
  # Makes everything uppercase

  $output = strtoupper('Howdy yall');
  echo $output;
  echo '<br>';

  # strtolower
  # Makes everything uppercase

  $output = strtolower('WOWZAS');
  echo $output;
  echo '<br>';

  # ucwords
  # Capitalize first letter of each word

  $output = ucwords('the quick brown fox');
  echo $output;
  echo '<br>';

  # str_replace()
  # Replace all occurences of a search string w/ a replacement

  $name = 'Sammy';

  $output = str_replace($name, 'Davis JR', 'Sammy');
  echo $output;
  echo '<br>';

  # is_string()
  # Check if string (1 for true, 0 for false)

  $value = 'Eggs';

  $output = is_string($value);
  echo $output;
  echo '<br>';

  $valsArray = [true, false, 22, 85, 'yes', 'no', 33, eggs, '', ' ', 'super'];

  foreach($valsArray as $value) {
    if(is_string($value)) {
      echo "$value is a string";
      echo '<br>';
    }
  }

  # gzcompress() & gzuncompress
  # Compress a string

  $longString = "Lorem ipsum dolor sit amet, consectetur
  adipiscing elit, sed do eiusmod tempor incididunt ut
  labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip
  ex ea commodo consequat. Duis aute irure dolor in
  reprehenderit in voluptate velit esse cillum dolore eu
  fugiat nulla pariatur. Excepteur sint occaecat cupidatat
  non proident, sunt in culpa qui officia deserunt mollit
  anim id est laborum.";

  $compressed = gzcompress($longString);
  echo $compressed;
  echo '<br>';

  $original = gzuncompress($compressed);
  echo $original;
  echo '<br>';

?>