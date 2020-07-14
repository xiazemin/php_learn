<?php

function diffBetweenTwoDays ($day1, $day2)
{
  $second1 = strtotime($day1);
  $second2 = strtotime($day2);
   
  if ($second1 < $second2) {
    $tmp = $second2;
    $second2 = $second1;
    $second1 = $tmp;
  }
  return ($second1 - $second2) / 86400;
}
$day1 = "2013-07-27 23:00";
$day2 = "2013-08-04 06:00";
$diff = diffBetweenTwoDays($day1, $day2);
echo $diff."\n";
