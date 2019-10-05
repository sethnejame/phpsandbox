<?php
  # Conditionals
  /*
    == Equal by val
    === Equal by val and type
    <
    >
    <=
    >=
    !=
    !==
  */

  // Equal by val
  $num = 5;

  if($num == 5) {
    echo '5 passed<br>';
  } elseif($num == 6) {
    echo '6 passed<br>';
  } else {
    echo 'nope <br>';
  }

  # Nesting IF

  $num = 6;
  if($num > 5) {
    if($num < 10) {
      echo "$num passed<br>";
    }
  }
  /*
    Logical Operators

    and &&
    or ||
    xor
  */

  if($num > 5 AND $num < 10) {
    echo "$num passed<br>";
  }

  if($num > 5 OR $num < 10) {
    echo "$num passed<br>";
  }

  if($num > 5 XOR $num < 10) {
    echo "$num passed<br>";
  }

  # SWITCHES
  $favColor = 'blood red';
  
  switch($favColor){
    case 'red';
      echo 'Your favorite color is blood red<br>';
      break;
    case 'poop brown';
      echo 'Your favorite color is poop brown<br>';
      break;  
    case 'puke green';
      echo 'Your favorite color is puke green<br>';
      break;
    default:
      echo 'whatever dude<br>';
  }
?>