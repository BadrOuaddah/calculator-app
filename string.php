<?php 
  $string = "Hello World";
  $lower = strtolower($string);
  $upper = strtoupper($string);
  $length = strlen($string);
  $replace = str_replace ("Hello", "Hola", $string);
  $subString = substr($string, 5);

  echo $string;
  echo "<br>";
  echo $lower;
  echo "<br>";
  echo $upper;
  echo "<br>";
  echo $length;
  echo "<br>";
  echo $replace;
  echo "<br>";
  echo $subString;

?>