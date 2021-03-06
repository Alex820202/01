<?php
namespace App;

class Db {
	protected $dbh;
	public $param;
	
	public function __construct() {
		$this -> dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '') ;
		
	}
	
	public function execute($sql, $param=[]){
		$sth = $this->dbh->prepare($sql);
		$res = $sth->execute();
		return $res;
	}
	
	public function query($sql, $class, $param=[]){
		$sth = $this->dbh->prepare($sql);
		$res = $sth->execute();
		if (false !==$res){
			return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
		}
		return [];
	}
}

?>