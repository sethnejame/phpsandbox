<?php

  #Loops
  /*
    For
    While
    Do..Whilte
    Foreach
  */

  // For

  for($i = 0; $i < 10; $i++) {
    echo $i;
    echo '<br>';
  }

  // While

  $i = 0;
  while($i < 10) {
    $i++;
    echo $i;
    echo '<br>';
  }

  // Do..While

  $i = 0;
  do {
    echo 'Some stuff';
    echo '<br>';
    $i++;
  }
  while($i < 10);

  // Foreach

  $people = ['Seth', 'Natalie', 'Charlie'];

  foreach($people as $person){
    echo $person;
    echo '<br>';
  }

  $morePeople = ['Bob' => 22, 'Satan' => 132432, 'God' => 123223];

  foreach($morePeople as $person => $age){
    echo "$person is $age years old.";
    echo '<br>';
  }

?>