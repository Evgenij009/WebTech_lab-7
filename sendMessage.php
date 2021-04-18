<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$msg = $_POST['msg'];
$subject = "Тестовая отправка спама от Евгена!";
$count = $_POST['count'];

$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: Кирилл Привет!!! \r\n";
$msg .= "/nTel: " . $tel;
echo $count;
for ($i = 0; $i < $count; ++$i) {
    if (mail($email, $subject, $msg, $name, $headers)) {
        echo $i . ") Сообщение отправлено!<br>";
    } else {
        echo $i . ") Ошибка<br>";
    }
}
