<?php

  #Arrays
  /*
    -Indexed
    -Associative
    -Multi-dimensional
    */

    // Indexed Array
    $people = array('Natalie', 'Seth', 'Charlie');
    $ids = array(49, 1209, 42, 2);
    $cars = ['Chevy','Ford','Dodge'];
    $cars[3] = 'GMC'; // add to array by index
    $cars[] = 'Volvo'; // add to end of array

    echo count($cars); // count method
    echo '<br>';

    print_r($cars); // print a whole array
    echo '<br>';

    var_dump($cars); // shows the var type, good for debugging
    echo '<br>';


    echo $people[1];
    echo '<br>';

    echo $ids[2];
    echo '<br>';

    echo $cars[4];
    echo '<br>';

    // Associative Array (Keys/Vals)
    $morePeople = array('Seth' => 33, 'Natalie' => 32, 'Charlie' => 9);
    echo $morePeople['Seth'];
    echo '<br>';


    $morePeople['Fat Bob'] = 100; // add to end of assc. array

    // Multi-Dimensional Array
    $cars = array(
      array('Ford', 20, 10),
      array('Dodge', 30, 10),
      array('Chevy', 20, 10),
    );

    echo $cars[1][0] // this will print out Dodge
?>