<?php

class Database{

	private $dbserver = 'localhost:3308';
	private $dbuser = 'root';
	private $dbpassword = '';
	private $dbname = 'php_ajax_crud';
	protected $conn;

	public function __construct()
	{
		$dsn = "mysql:host={$this->dbserver}; dbname={$this->dbname}; charset=urf8";
		$this->conn = new PDO($dsn, $this->dbuser,$this->dbpassword,$options);
	}
}


?>