<?php 

session_start();

require_once 'db_connect.php';

// echo $_SESSION['userId'];

if(!$_SESSION['userId']) {
	header('location: http://local.rocket.co.in:8081/test/stock/index.php');
} 

?>