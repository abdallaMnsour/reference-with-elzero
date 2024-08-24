<?php echo '<body style="background: #eeffef; color: #009688; font-family: Arial;font-size: 25px;padding: 40px"><pre>';
    /**
     * wordwrap => التفاف النص
     * ord => get number ASCII
     * chr => get char from ASCII
     * similar_text => بترجع عدد الاحرف الصحيحه و القيمه الثانيه بترجع نسبه مئويه
     */

  echo wordwrap('hello my name is abdallaaaaaaaaa and my age is 21', 8);
  echo "<br>";
  echo "<br>";
  echo wordwrap('hello my name is abdallaaaaaaaaa and my age is 21', 8, "\n");
  echo "<br>";
  echo "<br>";
  echo wordwrap('hello my name is abdallaaaaaaaaa and my age is 21', 8, "<br>", false);
  echo "<br>";
  echo "<br>";
  echo wordwrap('hello my name is abdallaaaaaaaaa and my age is 21', 8, "<div>", true);


  echo "<br>";
  echo "<br>";


  echo ord('a');
  echo "<br>";
  echo ord('z');
  echo "<br>";

  echo chr(97);
  echo "<br>";
  echo chr(122);
  
  echo "<br>";
  echo "<br>";
  echo similar_text('hello_world', 'hello world',$percent);
  echo "<br>";
  echo '%'. $percent;
  echo "<br>";
  echo "<br>";

  
    echo '-----------------------';
  
    function similar($text1, $text2, $percent){
        $numbers = 0;
        $m = 0;
        for ($i=0; $i<strlen($text1); $i++){
            while ($m<strlen($text2)){
                if ($text1[$i] == $text2[$m]) {
                   $numbers++;
                   break;
                }
                $m++;
            }
        }
        return $numbers;
    }

    echo '-----------------------';

    echo similar('_ hello', '_hello', 'wate');



?>