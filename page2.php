<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$result = require __DIR__ . '/index.php';
?>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<b>Результат вычислений:</b>
<br>
<?= $result ?>

</body>
</html>
</body>
</html>