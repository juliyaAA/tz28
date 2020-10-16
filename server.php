<?php
define('USER_LIST', __DIR__.'/users.csv');
$name = $_POST['name'];
$phone = $_POST['phone'];
$file = fopen(USER_LIST, "r");
$n = 1;
while ($line = fgetc($file)) {
    $n++;
}
$data = file_get_contents(USER_LIST);
if(!$data){
    $data .= "№;Имя;Телефон;\"Время добавления\"";
}
$data .= "\r\n$n; $name; $phone;\"". date('d.m.Y H:i:s'). "\"";
file_put_contents(USER_LIST, $data );

