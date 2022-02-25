<?php

$end_of_line = '<br/>';

echo "Hello, World! <br/>";
$name = "GeekBrains user";
echo "Hello, $name! <br/>";

define('MY_CONST', 100);
echo MY_CONST;
$MY_CONST = 50;
echo MY_CONST;

$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br/>";
echo "Двоичная система $int2 <br/>";
echo "Восьмеричная система $int8 <br/>";
echo "Шестнадцатеричная система $int16 <br/>";

$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3 <br/>";

$a = 4;
$b = 5;
echo $a + $b . $end_of_line;
echo $a * $b . $end_of_line;
echo $a - $b . $end_of_line;
echo $a / $b . $end_of_line;
echo $a % $b . $end_of_line;
echo $a ** $b . $end_of_line;

$a += $b;
echo $a . $end_of_line;
$a = 0;
echo $a++ . $end_of_line;
echo ++$a . $end_of_line;
echo $a-- . $end_of_line;
echo --$a . $end_of_line;


?>
