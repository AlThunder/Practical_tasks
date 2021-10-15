<?php
  $arr = array(1, 5, 13, 21, 78, 69, 100, 0, 9, 28);
  $s = 0;
  $i = 0;
  while ($i < count($arr)){
    $s = $s + $arr[$i];
    $i++;
  }
   echo $s.'<br/>';
?>