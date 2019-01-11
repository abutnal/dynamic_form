<?php 
class Database{
	private $host='localhost';
	private $dbName='pdoex';
	private $username= "root";
	private $password="";
	public $con;

	public function __construct(){
		$this->con = null;
		try {
		$this->con =new PDO('mysql:host='.$this->host.';dbname='.$this->dbName.';',$this->username,$this->password);
		$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Connection Error ".$e->getMessage();			
		}
	}
}
