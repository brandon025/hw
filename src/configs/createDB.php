<?php
namespace pastechart\hw\configs;

use pastechart\hw\configs\Config;

require_once('Config.php');
$conn=new \mysqli(Config::DB_HOST,Config::DB_USER,Config::DB_PASSWORD,"",Config::DB_PORT,Config::DB_SOCKET);
$query="create database ".Config::DB_NAME;
$conn->query($query);

if($conn->connect_error)
{
	print("Error creating database");
	exit;
}
else
{
	$conn->select_db(Config::DB_NAME);
	// $conn->query("drop table if exists month,xcord,ycord");
	$handle = fopen("insert.sql", "r");
    	if ($handle) {
    		while (($line = fgets($handle)) !== false) {
    			$query = $line;
    			$conn->query($query); 
    			}
	fclose($handle);
	}
	else
	{
		print("insert sql file not found!");
	}
$conn->close();
	
}
