<!
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/page2.php">
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" name="btn1" value="Посчитать">
</form>
<?php

if (empty($_GET)) {
    return 'Ничего не передано!';
}

if (empty($_GET['operation'])) {
    return 'Не передана операция';
}

if (empty($_GET['x1']) || empty($_GET['x2'])) {
    return 'Не переданы аргументы';
}
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];
$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';
switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;
?>
</body>
</html>
