<?php 
$server = "localhost";
$login = "root";
$pass = "";
$name_db = "payment";

$link = mysqli_connect($server, $login, $pass, $name_db);

if ($link == False)
{
	echo "Соединение не удалось";
}

$order_id = $_POST['order_id'];
print_r($order_id);
 ?>