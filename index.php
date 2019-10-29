<?php
/* !Basic PHP Conditionals */

$string_one = 'Learning to display.';

/* 'if' statement example */ 
if($string_one == 'Learning to display.')
{
    echo 'The values match.';
} elseif($string_one==""){
    echo  'String_one is empty.';
} else {
    echo 'The values do not match.';
}

$studentOneName = 'Dave';
$studentOneGPA = 3.8;

$studentTwoName = 'Treasure';
$studentTwoGPA = 4.0;

/* Nested 'if" statment example */ 
if ($studentOneGPA == 4.0) {
    echo $studentOneName . " made the Honor Roll";
  } else {
    echo $studentOneName . " has a GPA of " . $studentOneGPA;
  }
  
  if ($studentTwoGPA == 4.0) {
    echo $studentTwoName . " made the Honor Roll";
  } else {
    echo $studentTwoName . " has a GPA of " . $studentTwoGPA;
  }

?>