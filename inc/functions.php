<?php 

session_start();

$data = [
    'name' => '',
    'phone' => '',
    'product' => '',
    'price' => '',
];

if (!empty($_POST)){
	require_once 'db.php';
	$data = load($data);
    $order_id = save('orders', $data);

}

function save($table, $data){
    $tbl = R::dispense($table);
    foreach($data as $k => $v){
        $tbl->$k = $v;
    }
    return R::store($tbl);
}

function load($data){
    foreach($_POST as $k => $v){
    	if(array_key_exists($k, $data)){
    		$data[$k] = $v;
    	}
    }
    return $data;
}

function debug($data){
	echo '<pre>' . print_r($data, true) . '</pre>';
}