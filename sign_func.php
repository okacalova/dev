<?php
session_start();
$_SESSION['name'] = $_GET['login'];
$_SESSION['password'] = $_GET['password'];
$users = [
[ 
'login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'
],

[
'login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'
],
[
'login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'
],
[
'login' => 'Sasha', 'password' => 'Alea_est_jacta', 
],
];

foreach($users as $user => $value) {
if($_SESSION['name'] == $value['login'] && $_SESSION['password'] == $value['password']){
if($value['lang'] == 'ru'){
	print('Здравствуйте,'. $value['login']);
}
elseif ($value['lang'] == 'en') {
	print('Hello,'. $value['login']);
}
elseif ($value['lang'] == 'it') {
	print('Holla,'. $value['login']);
}
elseif (!$value['lang']){
	print($value['login']);
};
};
};