<?php
global $db;
// $db = new PDO(
// 			"mysql:host=".$db_connect_cfg['host'].";dbname=".$db_connect_cfg['db_name'].";",
// 			$db_connect_cfg['uid'], $db_connect_cfg['pwd'],
// 			array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'" )
// 			);
$db = new PDO(
			'mysql:host=localhost;dbname=LINE;charset=utf8', 'ms0100555', 'fjfe6060'
			);
