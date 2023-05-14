<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="png" href="a.svg">
</head>
<body>
    <?php
        $num1 = (isset($_POST["num1"]) and !empty($_POST["num1"])) ? $_POST["num1"] : 0;
        $num2 = (isset($_POST["num2"]) and !empty($_POST["num2"])) ? $_POST["num2"] : 0;
        $op = (isset($_POST["op"]) and !empty($_POST["op"])) ? $_POST["op"] : 0;

        if(($num1 == 0) or ($num2 == 0) or ($op == 0)){
            echo "Что-то пошло не так((";
        }
        else{
            //echo "всё ОК";
            switch($op){
                case '+': echo "$num1 + $num2 = " . ($num1 + $num2)  , "<br>";
                break;
                case '-': echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
                break;
                case '*': echo "$num1 * $num2 = " .($num1 * $num2), "<br>";
                break;
                case '/': echo "$num1 / $num2 = " .($num1 / $num2), "<br>";
                break;
            }
        }
    ?>
    <form action="" method="post">
        <div class="numbers">
        <input type="text" name="num1" placeholder="Введите первое число"><br>
        <input type="text" name="op" placeholder="Операция" style="margin: 0px 20px"><br>
        <input type="text" name="num2" placeholder="Введите второе число">
        </div>
        <input type="submit" value="SEND" placeholder="SEND" class="btn" style="background: #fff">
    </form>
</body>
</html>
