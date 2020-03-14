<?php 

/**
 * 
 */
class Database
{
	private $hostdb = "localhost";
	private $userdb = "root";
	private $passdb = "";
	private $namedb = "db_login";
	public  $pdo;
	
	public function __construct()
	{
		if(!isset($this->pdo)){
			try{
				$conn = new PDO("mysql:host=".$this->hostdb.";dbname=".$this->namedb, $this->userdb, $this->passdb);
    			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			$conn->exec("SET CHARACTER SET utf8");
				$this->pdo = $conn;
			}catch(PDOException $e){
				die("Failed to connect with Database".$e->getMessage());
			}
		}
	}
}

 ?>