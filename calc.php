<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nm1 = (int)$_POST['num1'];
    $nm2 = (int)$_POST['num2'];
    $op = trim(strip_tags($_POST['oper']));
    $result = "$nm1 $op $nm2  = ";

    switch($op){
        case "+": $result .=$nm1+$nm2; break;
        case "-": $result .=$nm1-$nm2; break;
        case "*": $result .=$nm1*$nm2; break;
        case "/":
            if ($nm2===0){
                $result="Деление на ноль!"; break;
            }
            else{
                $result .=$nm1/$nm2; break;
            }
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
</head>
<body>
    <form action="" method="post">
        Число №1:<br>
        <input name="num1" placeholder="Первое число" value="<?php $nm1?>" autofocus required pattern="(^[0-9]+$)"><br>
        Оператор:<br>
        <input name="oper" placeholder="Оператор ( + - * / )" value="<?php $op?>" autofocus required pattern="[+*/-]"><br>
        Число №2:<br>
        <input name="num2" placeholder="Второе число" value="<?php $nm2?>" autofocus required pattern="(^[0-9]+$)"><br>
        Результат:<br>
        <input name="res" placeholder="Результат" readonly value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $result;?>"><br><br>
        <input type="submit" value="Считать">
    </form>
    <form action="index.php">
        <button type="submit">Назад</button>
    </form>
</body>
</html>
