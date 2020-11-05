<?php
// Задание 1
echo "<br>" . "Задание 1" . "<br>";
$a = -10;
$b = 20;

if ($a >= 0 && $b >= 0) {
    echo 'Разность чисел равна ' . ($a - $b);
} else if (($a < 0 && $b < 0)) {
    echo 'Произведение чисел равно ' . ($a * $b);
} else echo 'Сумма чисел равна ' . ($a + $b);

// Задание 2
echo "<br><br>" . "Задание 2" . "<br>";

$c = 9;
switch ($c) {
    case 0 :
        echo 0 . "<br>";
    case 1 :
        echo 1 . "<br>";
    case 2 :
        echo 2 . "<br>";
    case 3 :
        echo 3 . "<br>";
    case 4 :
        echo 4 . "<br>";
    case 5 :
        echo 5 . "<br>";
    case 6 :
        echo 6 . "<br>";
    case 7 :
        echo 7 . "<br>";
    case 8 :
        echo 8 . "<br>";
    case 9 :
        echo 9 . "<br>";
    case 10 :
        echo 10 . "<br>";
    case 11 :
        echo 11 . "<br>";
    case 12 :
        echo 12 . "<br>";
    case 13 :
        echo 13 . "<br>";
    case 14 :
        echo 14 . "<br>";
    case 15 :
        echo 15 . "<br>";
    break;
}

// Задание 3
echo "<br><br>" . "Задание 3" . "<br>";

$d;
$e;
function sum($d, $e) {
    return $d + $e;
};
function sub($d, $e) {
    return $d - $e;
};
function mult($d, $e) {
    return $d * $e;
};
function deg($d, $e) {
    return $d / $e;
};

echo sum(150, 150);

// Задание 4
echo "<br><br>" . "Задание 4" . "<br>";

function calc($a, $b, $c) {
    switch ($c) {
        case "+" :
            echo sum($a, $b);
        break;
        case "-" :
            echo sub($a, $b);
        break;
        case "*" :
            echo mult($a, $b);
        break;
        case "/" :
            echo deg($a, $b);
        break;
    }
};
echo calc(13, 56, "*");
?>

<!-- Задание 5 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
        <p>Задание 5</p>
        <?= date("Y") ?>
    </footer>
</body>
</html>

<?php
//Задание 6
echo "<br>" . "Задание 6" . "<br>";
function power($val, $pow, $counter = 1) {

    if ($counter < $pow) {
        $val = $val*2;
        $counter++;
        return power($val, $pow, $counter);
    } else return $val;

}
echo power(2, 3);

// Задание 7
echo "<br><br>" . "Задание 7" . "<br>";

function whatTheTime(){
    
    if ($hours = 11 || $hours = 12 || $hours = 13 || $hours = 14){
        $hours = date("H"); // Если выполняется условие if, то переменная hours принимает двухзначеное значение текущего часа
    } else {
        $hours = substr($hours, 1, 1); //  Иначе, последней цифры текущего часа (прим. 21 час - $hours = 1)
    };
   
    switch ($hours){
        case 0 :
        case 5 :
        case 6 :
        case 7 :
        case 8 :
        case 9 :
        case 11 :
        case 12 :
        case 13 :
        case 14 :
            $resultH = " часов";
        break;
        case 1 :
            $resultH = " час";
        break;
        case 2 :
        case 3 :
        case 4 :
             $resultH = " часа";
        break;
    };

    if ($minutes = 11 || $minutes = 12 || $minutes = 13 || $minutes = 14){
        $minutes = date("i"); // С минутами сделал аналогично
    } else {
        $minutes = substr($minutes, 1, 1);
    }

    switch ($minutes){
        case 0 :
        case 5 :
        case 6 :
        case 7 :
        case 8 :
        case 9 :
        case 11 :
        case 12 :
        case 13 :
        case 14 :
             $resultMin = " минут";
        break;
        case 1 :
             $resultMin = " минута";
        break;
        case 2 :
        case 3 :
        case 4 :
             $resultMin = " минуты";
        break;
    };
    
    return $hours . $resultH . ' ' . $minutes . $resultMin;
}
echo whatTheTime();
?>

