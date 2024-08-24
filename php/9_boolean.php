<?php

// false values
  var_dump((bool) '');
  echo '<br>';
  var_dump((bool) 0);
  echo '<br>';
  var_dump((bool) []);
  echo '<br>';
  var_dump((bool) '0');
  echo '<br>';
  var_dump((bool) array());
  echo '<br>';
  // true values
  echo '<br>';
  var_dump((bool) 'hello');
  echo '<br>';
  var_dump((bool) 1);
  echo '<br>';
  var_dump((bool) ['hello', 'hello']);
  echo '<br>';
  var_dump((bool) array(1));
