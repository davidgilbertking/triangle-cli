<?php

function buildTriangle($n) {
    if ($n <= 0) {
        echo "Введите положительное число.\n";
        return;
    }

    $rows = sqrt($n);

    if ($rows != intval($rows)) {
        echo "Невозможно построить треугольник\n";
        return;
    }

    $rows = intval($rows);
    $current = 1;

    for ($i = 0; $i < $rows; $i++) {
        $count = 2 * $i + 1;
        $padding = str_repeat(" ", ($rows - $i - 1) * 2);
        echo $padding;

        for ($j = 0; $j < $count; $j++) {
            echo $current . " ";
            $current++;
        }

        echo "\n";
    }
}

// Запуск из командной строки
if (PHP_SAPI === 'cli') {
    if ($argc !== 2) {
        echo "Использование: php triangle.php <число>\n";
        exit(1);
    }

    $n = intval($argv[1]);
    buildTriangle($n);
}
