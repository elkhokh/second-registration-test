<?php

session_start();

function setMessages($type, $message)
{
    $_SESSION['message'] = [
        'type' => $type,
        'text' => $message,
    ];
}

function showMessages()
{
    if (isset($_SESSION['message'])) {
        $type = $_SESSION['message']['type'];
        $text = $_SESSION['message']['text'];

        echo "<div class='alert alert-$type'>$text</div>";

        unset($_SESSION['message']);
    }
}

$jsonFile = "employess.json";

function addEmployee($name, $email, $salary, $phone, $type)
{
    $employess = file_exists($GLOBALS['jsonFile']) ? json_decode(file_get_contents($GLOBALS['jsonFile']), true) : [];
    $empData = [
        'name' => $name,
        'email' => $email,
        'salary' => $salary,
        'phone' => $phone,
        'type' => $type,
    ];

    $employess[] = $empData;
    file_put_contents($GLOBALS['jsonFile'], json_encode($employess, JSON_PRETTY_PRINT));

    return true;
}
