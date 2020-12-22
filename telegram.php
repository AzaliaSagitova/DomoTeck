<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$price = $_POST['price'];
$token = "TOKEN";
$chat_id = "CHAT_ID";
$arr = array(
	'Имя пользователя: ' => $name,
	'Телефон:  ' => $phone,
	'Товар: ' => $product,
	'Цена: ' => $price
);

$txt = "Поступил новый заказ с сайта! ".implode(' ', $arr);

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
	require_once 'inc/functions.php';
    header('Location: thank-you.html');
} else {
  echo "Error";
}

?>
