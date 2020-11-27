<?php

// Задание 1
echo 'Задание 1 <br><br>';
$i = 0;
while ($i <= 100) {
    $i++; //Инкремент перед выводом результата для того, чтобы не было итерации для i = 0/
    if (!($i % 3)) {
        echo $i . ' ';
    }
}
// Задание 2
echo '<br><br>Задание 2 <br><br>';
function by10() {
    $i = 0;
    do{
        if ($i % 2 == 0) {
            if ($i == 0){
                $word = 'ноль';
            } else $word = 'четное число';
        } else $word = 'нечетное число';
        echo $i . ' - ' . $word . '<br>';
        $i++;
    } while ($i <= 10);
};

by10();

// Задание 3
echo '<br>Задание 3 <br><br>';

$cities = [
    'Саратовская область' => [
        'Саратов', 
        'Энгельс',
        'Александров Гай'
    ],
    'Ленинградская область' => [
        'Всеволожск', 
        'Сертолово',
        'Мурино'
    ],
    'Московская область' => [
        'Пушкино', 
        'Электросталь',
        'Серпухов'
    ]
];
echo '<pre>';
foreach ($cities as $key => $value) {
    print_r ($key . '<br>');
    print_r ($value);
};
echo '</pre>';

// Задание 4
echo '<br>Задание 4 <br><br>';

function translite ($userWord) {
    $letterList = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 
        'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 
        'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => "sh'", 'ы' => 'i', 'э' => 'e', 'ю' => 'yu', 
        'я' => 'ya'
    ];

    $userArray = str_split($userWord);
    $userLength = count($userArray);
    // var_dump($userArray);  На выходе массив из 12 символов (при длине вводимого слова 6)
    for ($counter = 0; $counter < $userLength; $counter++){
        echo $letterList[$userArray[$counter]];
    }
        
}
translite ('привет');
// Столкнулся с проблемой кодировки. Не получается вывести русские символы, выводит знаки вопроса, однако, 
// если пользоваться транслитом в обратную сторону (с английских букв на русские), всё работает хорошо.
// Сначала реализовал на цикле forEach, но думал, что где-то ошибся и сделал на for.

// Задание 5
echo '<br>Задание 5 <br><br>';

function replaced ($someText) {
    $newText = implode('_', explode(' ', $someText));
    return $newText;
}

echo replaced('Сегодня хорошая погода!');

// Задание 6
echo '<br><br>Задание 6 <br><br>';

$list = [
    Главная => [], 
    Каталог => [Футболки, Кофты], 
    Контакты => [Прочее]
];
foreach ($list as $key => $value) {
    $counter = 0; //Счетчик для while
    echo '<ul>';
    echo "<li>$key</li>";
    $countDroppedElements = count($key);
    while($counter < count($list[$key])){ //Перебор значений выпадающего меню
        
        if ($counter == 0){ // Если это первая итерация, тег ul открывается
            echo '<ul>';}

        echo '<li>';
        print_r($list[$key][$counter]);
        echo '</li>';

        if ($counter == $countDroppedElements){ //Если все значения выпадающего списка перебраны, тег ul закрывыается
            echo '</ul>';}
            
        $counter++; 
    }
    echo '</ul>'; 
    
}
echo '</ul>'; // Не успел найти, почему не хватает одного закрывающего тега


// Задание 7
echo '<br><br>Задание 7 <br><br>';

for ($c = 0; $c < 10; print($c++)) { 
}

?>


