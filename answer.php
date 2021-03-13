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

        echo $_POST['num1'] . $_POST['operator'] . $_POST['num2'] . '=' ;

    ?>
    <a href="calc_form.php">戻る</a>
</body>
</html>