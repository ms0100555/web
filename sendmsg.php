<?php 
	
	@header("Content-Type:text/html; charset=utf8"); 
	require_once("./function/global_function.php");

	

	$msg = $_POST["msg"]; //接收POST的 msg
	$time = $_POST["readTime"]; //接收POST的 readTime

	$data = array($msg, $time); //包成陣列
	$send_result = sqlEdit( "INSERT INTO message (msg_content,msg_time) VALUES (?,?)", $data); //存入資料庫
	echo "OK"; //回傳ＯＫ給indxe.php

	
	// echo $data[0];
	


	
 // 	return $msg_result;
 ?>