<?php
echo "Урок 2. Задание 1.<br>";
$a = -3;
$b = 5;
if ($a >= 0 and $b >= 0) {
    echo "a = " . $a . "; b = " . $b . "<br>Оба числа положительные. Разность равна " . ($a - $b) . "<br>";
} elseif ($a < 0 and $b < 0) {
    echo "a = " . $a . "; b = " . $b . "<br>Оба числа отрицательные. Произведение равно " . ($a * $b) . "<br>";
} else {
    echo "a = " . $a . "; b = " . $b . "<br>Числа с разными знаками. Сумма равна " . ($a + $b) . "<br>";
}

//Урок 2. Задание 2
//Вариант 1. Прямолинейный
echo "<br>Урок 2. Задание 2.<br>";
echo "Вариант 1. Прямолинейный (для a = 7).<br>";
$a = 7;
switch ($a) {
    case 1:
        echo $a . ", ";
        $a++;
    case 2:
        echo $a . ", ";
        $a++;
    case 3:
        echo $a . ", ";
        $a++;
    case 4:
        echo $a . ", ";
        $a++;
    case 5:
        echo $a . ", ";
        $a++;
    case 6:
        echo $a . ", ";
        $a++;
    case 7:
        echo $a . ", ";
        $a++;
    case 8:
        echo $a . ", ";
        $a++;
    case 9:
        echo $a . ", ";
        $a++;
    case 10:
        echo $a . ", ";
        $a++;
    case 11:
        echo $a . ", ";
        $a++;
    case 12:
        echo $a . ", ";
        $a++;
    case 13:
        echo $a . ", ";
        $a++;
    case 14:
        echo $a . ", ";
        $a++;
    case 15:
        echo $a . "<br>";
}

//Вариант 2. Рекурсия
echo "Вариант 2. Рекурсия (для a = 3).<br>";
$a = 3;
function stringOfNumbers($a, $upperLimit) {
switch ($a) {
    case $upperLimit:
        echo "15<br>";
        break;
    default:
    echo $a . ", ";
    $a++;
    stringOfNumbers($a, $upperLimit);
    }
}
stringOfNumbers($a, 15);

//Урок 2. Задание 3.
echo "<br>Урок 2. Задание 3.<br>";
function sumTest($a,$b) {
return $a + $b;
}
function subTest($a,$b) {
return $a - $b;
}
function divTest($a,$b) {
    if ($b == 0) {
        return "недопустимое значение знаменателя - попытка деления на ноль";
    } else {
        return $a / $b;
    }
}
function multiTest($a,$b) {
return $a * $b;
}
echo "сумма: " . sumTest(5,8) . "<br>";
echo "разность: " . subTest(5,8) . "<br>";
echo "деление: " . divTest(5,0) . "<br>";
echo "умножение: " . multiTest(5,8) . "<br>";

//Урок 2. Задание 4
echo "<br>Урок 2. Задание 4.<br>";
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "addition":
            return sumTest($arg1, $arg2);
            break;
        case "subtraction":
            return subTest($arg1, $arg2);
            break;
        case "division":
            return divTest($arg1, $arg2);
            break;
        case "multiplication":
            return multiTest($arg1, $arg2);
            break;
        default:
        return "неизвестная операция";
    }
}
$a = 2;
$b = 3;
echo "результат операции сложения при a = " . $a . " и b = " . $b . " равен: " . mathOperation($a,$b,"addition") . "<br>";
echo "результат операции вычитания при a = " . $a . " и b = " . $b . " равен: " . mathOperation($a,$b,"subtraction") . "<br>";
echo "результат операции умножения при a = " . $a . " и b = " . $b . " равен: " . mathOperation($a,$b,"multiplication") . "<br>";
echo "результат операции деления при a = " . $a . " и b = " . $b . " равен: " . mathOperation($a,$b,"division") . "<br>";
echo "результат операции деления при a = " . $a . " и b = 0 равен: " . mathOperation($a,0,"division") . "<br>";
echo "результат операции логарифма a = " . $a . " по основанию b = " . $b . " равен: " . mathOperation($a,$b,"log") . "<br>";

//Урок 2. Задание 5
echo "<br>Урок 2. Задание 5.<br>";
echo "сделано отдельным архивом<br>";

//Урок 2. Задание 6
echo "<br>Урок 2. Задание 6.<br>";
function power($val, $pow) {
    if (gettype($pow) == "integer" and $pow >=0 ) {
        if ($pow == 0) {
            return 1;
        } elseif($pow == 1) {
            return $val;    
        } else {
            $pow = $pow - 1;
            $total = $val * power($val, $pow);
            return $total;
        }
    } else {
        return "степень должна быть задана положительным целочисленным значением";
    }
}
$a = 2;
$b = 5;
echo "проверка: " . $a . " возводим в степень " . $b . ": результат: " . power($a,$b) . "<br>";
$a = 2;
$b = -1;
echo "проверка: " . $a . " возводим в степень " . $b . ": результат: " . power($a,$b) . "<br>";
$a = 2;
$b = 0;
echo "проверка: " . $a . " возводим в степень " . $b . ": результат: " . power($a,$b) . "<br>";
$a = 2;
$b = 1;
echo "проверка: " . $a . " возводим в степень " . $b . ": результат: " . power($a,$b) . "<br>";
$a = 2;
$b = 3.7;
echo "проверка: " . $a . " возводим в степень " . $b . ": результат: " . power($a,$b) . "<br>";

//Урок 2. Задание 7
echo "<br>Урок 2. Задание 7.<br>";
$timeAndDate = getdate();
$h = $timeAndDate['hours'];
if ($h == 0) {
    $hours = "часов";
} elseif ($h == 1 or $h == 21) {
    $hours = "час";
} elseif ($h <= 4 or $h >= 21) {
    $hours = "часа";
} else {
    $hours = "часов";
}
$m = $timeAndDate['minutes'];
$mLast = substr($m,strlen($m)-1,1);
if ($mLast == "1" and $m != 11) {
    $minutes = "минута";
} elseif (($mLast >= 2 and $mLast <= 4) and ($m <12 or $m >14)) {
    $minutes = "минуты";
} else {
    $minutes = "минут";
}

echo $h . " " . $hours . " " . $m . " " . $minutes;
?>