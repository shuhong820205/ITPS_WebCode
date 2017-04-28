<?php
//資料庫設定
//$dbServer = "infiark-db-instance.cwuhzdlap8nn.ap-southeast-1.rds.amazonaws.com";
$dbServer = "localhost";
$dbUser = "root";
//$dbPass = "12345678";
$dbPass = "1qazBgt5";
//$dbName = "traffic";
$dbName = "neihu";

//連線資料庫伺服器
$conn = @mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

if (mysqli_connect_errno($conn))
	die("無法連線資料庫伺服器");
	
//設定連線的字元集為 UTF8 編碼
mysqli_set_charset($conn, "utf8");
?>