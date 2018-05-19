<?php

$print ("what a fuck are you doing here, dude?")

$lines = file('http://inazarov.ru/');

// Осуществим проход массива и выведем содержимое в виде HTML-кода вместе с номерами строк.
foreach ($lines as $line_num => $line) {
    echo "Строка #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}

?>