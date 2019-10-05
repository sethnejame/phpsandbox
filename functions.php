<?php
  # Functions
  /*
    Camel Case - myFunction() - these for norm funcs
    Lower Case - my_function()
    Pascal Case - MyFunction() - these for classes
  */

  // Create
  function simpleFunction() {
    echo 'Hello World!';
  }

  // Invoke
  simpleFunction();
  echo '<br >';

  // Create w/ params

  // ='Dude' sets a default, incase arg isn't provided
  function predator($name = 'dude', $text) {
    echo "$text $name";
  }

  predator('Seth', 'Get to the choppa ');

  function addNums($num1, $num2) {
    return $num1+$num2;
  }

  echo addNums(2, 3);

  // By reference

  $myNum = 10;

  // make a copy of myNum, add 5 to it
  function addFive($num) {
    $num += 5;
  }

  // add 10 directly to myNum
  function addTen(&$num) {
    $num += 10;
  }

  addFive($myNum);

  echo "Value: $myNum<br>";

  addTen($myNum);

  echo "Value: $myNum<br>";
?>