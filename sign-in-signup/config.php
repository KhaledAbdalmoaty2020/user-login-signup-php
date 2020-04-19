<?php

$dsn='mysql:host=localhost;dbname=user_account;charset=utf8';
$db=new PDO($dsn,"root","");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>