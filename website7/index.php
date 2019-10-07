<?php
  $path = 'dir0/dir1/myfile.php';
  $file = 'file.txt';

  // Return filename
  echo basename($path);
  echo '<br>';

  // Return filename w/o extension
  echo basename($path, '.php');
  echo '<br>';

  // Return the dir name from path
  echo dirname($path);
  echo '<br>';

  // Check if file exists (ret. 1: true, 0: false)
  echo file_exists($file);
  echo '<br>';


  // Get absolute path
  echo realpath($file);
  echo '<br>';

  // Checks to see if file
  echo file_exists('test');
  echo '<br>';

  // Check if writeable
  echo is_writable($file);
  echo '<br>';

  // Check if readable
  echo is_readable($file);
  echo '<br>';

  // Check filesize (bytes)
  echo filesize($file);
  echo '<br>';

  // Create a dir
  mkdir('testing');

  // Remove empty dir
  rmdir('testing');

  // Copy file
  echo copy('file.txt', 'copiedfile.txt');

?>