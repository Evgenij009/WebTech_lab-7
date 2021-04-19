<?php
$name = test_input($_POST['name']);
$tel = test_input($_POST['tel']);
$email = test_input($_POST['email']);
$topic = test_input($_POST['topic']);
$msg = test_input($_POST['msg']);
$isValid = true;

if (!isValidateEmail($email)) {
    $isValid = false;
    echo "Email is invalid!<br>";
}

if ($isValid) {
    $msg .= "Tel: " . $tel . " Name: " . $name;
    if (mail($email, $topic, $msg)) {
        echo "Сообщение отправлено!<br>";
    } else {
        echo "Ошибка<br>";
    }
}


function isValidateEmail($line)
{
    if (!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i", $line)) {
        return false;
    }
    return true;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
