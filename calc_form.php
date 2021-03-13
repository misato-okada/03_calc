<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>計算アプリ</h1>
    <h2>計算式を入力して下さい</h2>
    <form action="answer.php" method="post">
        <input type="number" name="num1" required>
        <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="×">×</option>
            <option value="÷">÷</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" value="計算">
    </form>
</body>
</html>