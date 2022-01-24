<?php


namespace application\lib;
use ORM;
use PDO;


class Db
{
	protected $db;
	
	public function __construct() 
	{
		$config = require 'application/config/db.php';
		ORM::configure('mysql:host='.$config['host'].';dbname='.$config['name'].'');
		ORM::configure('username', $config['user']);
		ORM::configure('password', $config['password']);
		ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	}

}