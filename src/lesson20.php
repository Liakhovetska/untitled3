<?php

$method = $_SERVER['REQUEST_METHOD'];


if ($method === 'GET') {

    echo "Привіт, світ!";
}


if ($method === 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);


    if (isset($data['number1']) && isset($data['number2'])) {

        $sum = $data['number1'] + $data['number2'];


        echo "Результат додавання: " . $sum;
    } else {

        http_response_code(400);
        echo "Помилка: отримано недостатньо даних для обчислення суми.";
    }
}
