<?php

// الدرس الثاني و الثالث

// php انواع لبيانات في ال 

// typeof === gettype()

// boolean is not sensitive
  print gettype('hello'); // string
  echo '<br>';
  print gettype(trUe); // boolean
  echo '<br>';
  print gettype(falSE); // boolean
  echo '<br>';
  print true + true; // 2
  echo '<br>';
  print gettype(false + true); //integer
  echo '<br>';
  print gettype(20.5 + 10); // double
  echo '<br>';
  print gettype((int)20.5 + 10); // integer
  echo '<br>';
  print gettype(20.5 + 10.5); // double
  echo '<br>';
  print gettype((int)(20.5 + 10)); // integer