<?php include './task3.php';

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            return addition($arg1, $arg2);
        case '-':
            return subtraction($arg1, $arg2);
        case '*':
            return multiplication($arg1, $arg2);
        case '/':
            return division($arg1, $arg2);
        default:
            return 'неверный оператор';
    }
}
