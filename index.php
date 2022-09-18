<?php 
$n = rand(1,13);
switch ($n){
    case 1: echo 'Вчимо букви'; break;
    case 2: echo 'Вчимо таблицю множення'; break;
    case 3: echo 'Вчимо розв\'язувати дроби'; break;
    case 4: echo 'Вчимо множити в стопчик'; break;
    case 5: echo "Вчимо НОД"; break;
    case 6: echo "Вчимо рівняння"; break;
    case 7: echo "Вчимо трикутники"; break;
    case 8: echo "Вчимо теорему Піфагора"; break;
    case 9: echo "Вчимо многокутники"; break;
    case 10: echo "Вчимо площини"; break;
    case 11: echo "Вчимо Логарифми"; break;
    case 12: echo "Майже все вивчили!"; break;
    default: echo "<span style=\"color:red;\">Такого класу ми не маємо</span>";
}

