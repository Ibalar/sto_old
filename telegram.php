<?php

$phone = $_POST['phone'];
$name = $_POST['name'];

$token = "6018327692:AAFih0ape_Pp1Q8Eh5dAkZeLLxJQtOSd9fw";

$chat_id = "-840883210";

$arr = array(

    'Имя: ' => $name,
    'Телефон: ' => $phone,

);





foreach($arr as $key => $value) {

    $txt .= "<b>".$key."</b> ".$value."%0A";

};



$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");



if ($sendToTelegram) {

    header('Location: /spasibo-za-zayavku');

} else {

    echo "Error";

}





?>