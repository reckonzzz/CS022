<?php
	header("Content-Type: text/html;charset=utf-8"); 
	$servername = "localhost";
	$username = "root";
	$password = "***********";//密码屏蔽
	$db = "final";
	
	$conn = new mysqli($servername,$username,$password,$db);
	if($conn->connect_error){
		die("连接失败:".$conn->connect_error);
	}
	$conn->query("set names utf8");
?>