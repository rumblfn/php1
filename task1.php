<?php

$a = rand(-100, 100);
$b = rand(-100, 100);

echo $a . ' ' . $b . PHP_EOL;

if ($a >= 0 && $b >= 0) {
    echo 'а и б положительные';
} else if ($a < 0 && $b < 0) {
    echo 'а и б отрицательные';
} else {
    echo 'а и б разных знаков';
}
