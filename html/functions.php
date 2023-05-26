<?php
    function printTable($str1, $str2, $str3, $str4) {
        echo "<table>";
        echo "<tr><td>$str1</td></tr>";
        echo "<tr><td>$str2</td></tr>";
        echo "<tr><td>$str3</td></tr>";
        echo "<tr><td>$str4</td></tr>";
        echo "</table>";
    }
    function cookie() {
    // Устанавливаем cookie с именем "visits" и значением "1" на 1 день
    if (!isset($_COOKIE['visits'])) {
        setcookie('visits', '1', time() + 86400);
        echo 'Добро пожаловать!';
    } else {
        // Увеличиваем значение cookie на 1
        $visits = intval($_COOKIE['visits']) + 1;
        setcookie('visits', strval($visits), time() + 86400);
        setcookie('last_visit', time(), time() + 86400);
        // Выводим количество посещений и дату последнего посещения
        echo 'Вы зашли на страницу ' . $visits . ' раз<br>';
        echo 'Последнее посещение: ' . date('d-m-Y H:i:s', $_COOKIE['last_visit']);
    }
    }
?>