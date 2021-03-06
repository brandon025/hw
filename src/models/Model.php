<?php
namespace pastechart\hw\models;

use pastechart\hw\configs\Config;

class Model {
public $model;
public $connection;

public function __construct()
{
	$this->initiateConnection();
}

public function initiateConnection()
{
	$this->connection=new \mysqli(Config::DB_HOST,Config::DB_USER,Config::DB_PASSWORD,Config::DB_NAME,Config::DB_PORT,Config::DB_SOCKET);
	if($this->connection->connect_error)
	{
		return false;
	}
	else return true;
}

public function closeConnection()
{
	$this->connection->close();
}
}
