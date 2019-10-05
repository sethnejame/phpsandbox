<?php
  # Date

  echo date('d'); // Day
  echo date('m'); // Month
  echo date('y'); // Year
  echo date('l'); // Weekday
  echo '<br>';  


  echo date('Y/m/d');
  echo '<br>';  
  echo date('m-d-y');
  echo '<br>';  

  # Time

  echo date('h'); // Hour
  echo date('i'); // Minute
  echo date('s'); // Seconds
  echo date('a'); // AM or PM
  echo '<br>';  

  echo date('h:i:sa');
  echo '<br>';  

  // Set Time Zone

  date_default_timezone_set('America/Los_Angeles');
  echo date('h:i:sa');
  echo '<br>';  

  // Timestamp (number of secs bet Unix Epoch (01/01/1970) and the time specified)
  $timestamp = mktime(4, 13, 54, 1, 23, 1986);

  echo $timestamp;
  echo '<br>';  
  echo date('m/d/Y h:i:sa', $timestamp);
  echo '<br>';  


  $timestamp2 = strtotime('9:00am March 23 1987');
  echo $timestamp2;
  echo '<br>';  

  echo date('m/d/Y h:i:sa', $timestamp2);
  echo '<br>';  

  $timestamp3 = strtotime('tomorrow');
  echo date('m/d/Y h:i:sa', $timestamp3);
  echo '<br>';  

  $timestamp4 = strtotime('next Friday');
  echo date('m/d/Y h:i:sa', $timestamp4);
  echo '<br>';  

  $timestamp5 = strtotime('+2 months');
  echo date('m/d/Y h:i:sa', $timestamp5);
  echo '<br>';  

?>