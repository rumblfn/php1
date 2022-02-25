<?php
$a = 1;
$b = 2;
echo $a . $b . PHP_EOL;
list($a, $b) = [$b, $a];  // 
echo $a . $b . PHP_EOL;