<?php 
$n = rand(1,13);
switch ($n){
    case 1: echo "У $n класі ми вчимо букви."; break;
    case 2: echo "У $n класі ми вчимо таблицю множення"; break;
    case 3: echo "У $n класі ми вчимо розв'язувати дроби"; break;
    case 4: echo "У $n класі ми вчимо множити в стопчик"; break;
    case 5: echo "У $n класі ми вчимо НОД"; break;
    case 6: echo "У $n класі ми вчимо рівняння"; break;
    case 7: echo "У $n класі ми вчимо трикутники"; break;
    case 8: echo "У $n класі ми вчимо теорему Піфагора"; break;
    case 9: echo "У $n класі ми вчимо многокутники"; break;
    case 10: echo "У $n класі ми вчимо площини"; break;
    case 11: echo "У $n класі ми вчимо Логарифми"; break;
    case 12: echo "У $n класі ми майже все вивчили!"; break;
    default: echo "<span style=\"color:red;\">Такого класу ми не маємо</span>";
}

