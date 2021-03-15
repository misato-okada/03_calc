<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>計算結果</h1>
    <?php

    $sum  = $_POST['num1'] + $_POST['num2'];
    $diff = $_POST['num1'] - $_POST['num2'];
    $pro  = $_POST['num1'] * $_POST['num2']; 
    $quo  = $_POST['num1'] / $_POST['num2'];

    switch ($_POST['operator']) {
        case '+':
            echo $_POST['num1'] . '+' . $_POST['num2'] . '=' . $sum;
            break;
        case '-':
            echo $_POST['num1'] . '-' . $_POST['num2'] . '=' . $diff;
            break;
        case '×':
            echo $_POST['num1'] . '×' . $_POST['num2'] . '=' . $pro;
            break;
        default:
            echo $_POST['num1'] . '÷' . $_POST['num2'] . '=' . $quo;
            break;
    }
    ?>
    <br><br>
    <a href="calc_form.php">戻る</a>
</body>
</html>