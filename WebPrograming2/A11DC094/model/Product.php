<?php
require_once 'util.php';
class Product{
	//Data
	private $id;
	private $name;
	private $price;
	private $pdo;
	//Setter Getter
	// Method
	public function __Product(){
		print("teatae");
	}
	public function all(){
		$result;
		$this->pdo=new PDO('mysql:host=localhost;dbname=webpro2examdb;charset=utf8','root','');
		try{
			$result=$this->pdo->query("SELECT * from products");
		}catch(PDOexception $e){
		var_dump($e->getMessage());
		}
		return $result;
	}

	public function load($id){
		$result;
		$this->pdo=new PDO('mysql:host=localhost;dbname=webpro2examdb;charset=utf8','root','');
		try{
			$stmt=$this->pdo->prepare("SELECT * from products where id=:id");
			$stmt->bindValue(':id',$id);
			$stmt->execute();
		}catch(PDOexception $e){
		var_dump($e->getMessage());
		}
		return $stmt;
	}
}