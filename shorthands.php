<?php
  # Ternary Operators

  $loggedIn = false;
  $arr = ['banana', 'orange', 'mango'];
  echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';
  echo '<br>';

  $isRegisterd = ($loggedIn == true) ? true : false;
  echo $isRegistered;
  echo '<br>';

  # Nested Ternary

  $age = 20;
  $score = 15;

  echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional')
  : ($age > 10 ? 'Horrible' : 'Average'));
  echo '<br>';

?>

<!-- Shorthand for inserting HTML -->

<!-- <div>
<?php if($loggedIn) { ?>
  <h1>Welcome User</h1><br />
<?php } else { ?>
  <h1>Please log in to continue</h1><br />
<?php } ?>
</div> -->

<!-- Shorthand If/Else -->

<div>
<?php if($loggedIn): ?>
  <h1>Welcome User</h1>
<?php else: ?>
  <h1>Welcome Guest</h1>
<?php endif; ?>
</div>

<!-- Shorthand Foreach -->

<div>
<?php foreach($arr as $val): ?>
  <li><?php echo "$val <br>" ?></li>
<?php endforeach; ?>
</div>

<!-- Shorthand Loops -->

<div>
<?php for($i = 0; $i < 10; $i++): ?>
  <li><?php echo "$i <br>" ?></li>
<?php endfor; ?>
</div>