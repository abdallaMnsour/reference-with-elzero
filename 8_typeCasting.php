<?php
  /*
  ==================================
  = data type
  =------------
  = type casting
  =------------
  = "boolean" or "bool"
  = "integer" or "int"
  = "float" or "double" or "real"
  = "string"
  = "object"
  = "array" 
  = "null"
  =------------
  = search for settype
  ==================================
  */


  echo 5 + (int)'5 hello world'; // تحويل الي رقم 10
  echo '<br>';
  echo 5 + (int)5.5; // تحويل الي رقم صحيح
  // integer او int يمكن كتايه 
  echo '<br>';
  echo gettype(5 + (int)'5 hello world');
  echo "<br>";
  echo gettype((int)(5 + 5.5)); // integer => 10