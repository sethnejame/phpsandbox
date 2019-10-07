<?php
  $user = ['name' => 'Seth', 'email' => 'test@test.com', 'age' => 33]; // cookies can store arrays as well
  $user = serialize($user); // but the array must first be serialized (prepped)

  // sets the cookie with an array of serialized data ($user)
  setCookie('user', $user, time() + (86400 * 30));

  // to view the cookie data, we have to unserialize it
  $user = unserialize($_COOKIE['user']);
  echo $user['name'];
  echo '<br>';
  print_r($user)

?>