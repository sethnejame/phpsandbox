<?php
  // single comment here
  # another single comment here

  /* multi
  line
  comment
  */

  # Variables
  /*
    -Prefix all vars w/ $
    -Start with letter or underscore
    -Only letts, nums and underscores
    -Case sensitive
  */

  # Data types
  /*
    Strings
    Integers
    Floats
    Bools
    Arrays
    Objects
    NULL
    Resource
  */

  $str1 = "Yo";
  $str2 = "Seth";
  $int = 100;
  $flt = 42.42;
  $grtg = $str1 . ' ' . $str2; // concat w/ periods & single quotes
  $grtg2 = "$str1 $str2"; // string interp w/ double quotes

  $str3 = 'They\'re Here'; // escaped quote w/ backslash

  define('GREETING', 'Hello Everyone'); // defining a constant

  echo GREETING; // case-sensitive
?>