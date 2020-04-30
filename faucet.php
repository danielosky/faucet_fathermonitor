<?php 
$address = $_POST['address'];

//GENERATE PASS FOR COOKIE
$caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$longpalabra=20;
for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
	$x = rand(0,$n);
	$pass.= $caracteres[$x];
}

if($address){
//CHEQUEAMOS IP
$buscamos_ip = $conectar->query("SELECT all_ip FROM faucet WHERE id='1'");
$all_ip = $buscamos_ip->fetch_assoc();
$all_ip = json_decode($all_ip['all_ip'],true);

?>
