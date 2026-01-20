<?php

$phone = $_POST['phone'];
$name = $_POST['name'];

$token = "#";

$chat_id = "#";

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