<?php

function addition($x, $y) { return $x + $y; }
function subtraction($x, $y) { return $x - $y; }
function multiplication($x, $y) { return $x * $y; }
function division($x, $y)
{
    return $y ? $x / $y : 'division by zero';
}
