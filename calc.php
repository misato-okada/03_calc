<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

$sum  = $num1 + $num2;
$diff = $num1 - $num2;
$pro  = $num1 * $num2; 
$quo  = $num1 / $num2;

switch ($operator) {
    case 'addition':
        echo "{$num1} + {$num2} = {$sum}";
        break;
    case 'subtraction':
        echo "{$num1} - {$num2} = {$diff}";
        break;
    case 'multiplication':
        echo "{$num1} * {$num2} = {$pro}";
        break;
    case 'division':
        echo "{$num1} / {$num2} = {$quo}";
        break;
    default:
        echo '正しい演算子を指定して下さい';
        break;
}
