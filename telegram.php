<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$price = $_POST['price'];
$token = "1467292575:AAFc0ffFrW06Z8S7KV4cPYxNWwsgVopf4Lo";
$chat_id = "-410559838";
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