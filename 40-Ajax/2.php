<?php
	header("Content-Type: text/plain;charset=utf-8"); 
	$a = $_POST[user];
	$b = $_POST[pwd];
	$c = $_POST[tel];
	echo "您的用户名是 $a;您的密码是:$b;您的电话：$c"
?>