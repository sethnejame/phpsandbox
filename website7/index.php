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
  copy('file.txt', 'copiedfile.txt');

  // Rename file
  rename('file2.txt', 'myfile.txt');

  // Delete file
  unlink('myfile.txt');

  // Write from file to string
  echo file_get_contents($file);
  echo '<br>';

  // Write string to file
  echo file_put_contents($file, 'Goodbye, cruel world!');
  echo '<br>';

  // Append string to file
  $current = file_get_contents($file);
  $current .= " Another goodbye!";
  file_put_contents($file, $current);

  // Open file for reading
  $handle = fopen($file, 'r'); // r for 'read'
  $data = fread($handle, filesize($file));
  fclose($handle);
  echo $data;
  echo '<br>';

  // Open file for writing
  $handle = fopen('file2.txt', 'w'); // create a new file named 'file2.txt', use w for 'write'
  $text = "And hello again!";
  fwrite($handle, $text);
  fclose($handle);

?>