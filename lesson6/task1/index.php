<?php

$result = 0;
$arg1 = 0;
$arg2 = 0;
$operation = $_GET['operation'] ?? "+";

function addition($x, $y) 
{
    return [
        'result' => $x + $y,
        'status' => 'ok'
    ];
}
function subtraction($x, $y) 
{
    return [
        'result' => $x - $y,
        'status' => 'ok'
    ];
}
function multiplication($x, $y) 
{ 
    return [
        'result' => $x * $y,
        'status' => 'ok'
    ];
}
function division($x, $y)
{
    return [
        'result' => $y ? $x / $y : 'division by zero',
        'status' => $y ? 'ok' : 'error'
    ];
}

function mathOperation($arg1, $arg2, $operation)
{
    $status = 'ok';
    switch ($operation) {
        case '+':
            return addition($arg1, $arg2);
        case '-':
            return subtraction($arg1, $arg2);
        case '*':
            return multiplication($arg1, $arg2);
        case '/':
            return division($arg1, $arg2, $status);
        default:
            return [
                'result' => 'неверный оператор',
                'status' => 'error'
            ];
    }
}

if (!empty($_GET)) {
    $arg1 = $_GET['arg1'];
    $arg2 = $_GET['arg2'];
    $operation = $_GET['operation'];
    $result = [
        'result' => $_GET['result']
    ];

    if ($operation) {
        $result = mathOperation($arg1, $arg2, $operation);
        if ($result['status'] === 'error') {
            $arg1 = "";
            $arg2 = "";
            $message = $result['result'];
            $result['result'] = 0;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a class="btn btn-primary" href="../index.php" role="button">< Обратно</a>
        <h2>Форма-калькулятор</h2>
        <form action="index.php" method="get">
            <input class='field' type="number" name="arg1" value="<?=$arg1?>">
            <select name="operation">
                <option <?= !$operation or $operation === '+' ? "selected" : null ?> >+</option>
                <option <?php if ($operation === '-') { echo 'selected'; } ?> >-</option>
                <option <?php if ($operation === '*') { echo 'selected'; } ?> >*</option>
                <option <?php if ($operation === '/') { echo 'selected'; } ?> >/</option>
            </select>
            <input class='field' type="number" name="arg2" value="<?=$arg2?>">
            <input type="submit" value="=">
            <input class='field' readonly type="text" name="result" value="<?=$result['result']?>">
        </form>
        <p><?=$message?></p>
    </div>
</body>
</html>