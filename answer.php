<?php
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $sum  = $num1 + $num2;
    $diff = $num1 - $num2;
    $pro  = $num1 * $num2; 
    $quo  = $num1 / $num2;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算アプリ</title>
</head>
<body>
    <h1>計算結果</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        switch ($operator) {
            case '+':
                echo $num1 . '+' . $num2 . '=' . $sum;
                break;
            case '-':
                echo $num1 . '-' . $num2 . '=' . $diff;
                break;
            case '×':
                echo $num1 . '×' . $num2 . '=' . $pro;
                break;
            default:
                echo $num1 . '÷' . $num2 . '=' . $quo;
                break;
        }
    }
    ?>
    <br><br>
    <a href="calc_form.php">戻る</a>
</body>
</html>