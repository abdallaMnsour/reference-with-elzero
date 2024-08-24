<?php
/* ============================
   Data types
   =--------
   string and scaping
   =============
   == heredoc ==
   == nowdoc  ==
   =============
*/

// thows are like """""" nl2br() """"""

  echo nl2br('hello i just make test in one line
  and this is second line
  my name is abdalla mansour
  ');

  $name = 'abdalla mansour';

// يمكن كتابه تي كلمه تعبيريه مثل المتغير
  echo <<<"here"
    hello avry one
    my name is $name 
    here;

// الفرق انها تدعم لا المتغيرات
  echo <<<'now'
    my name is abdalla i just testing now escaping in one line
    and this is second line and what i concluded,
    those lines are just one line $name
  now;



  echo "<ul>
          <li>$name</li>
          <li>$name</li>
          <li>$name</li>
          <li>$name</li>
          <li>$name</li>
        </ul>";

  echo <<<"test"
    <ul>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
    </ul>
  test;

