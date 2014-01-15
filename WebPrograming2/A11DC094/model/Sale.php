<?php
require_once 'util.php';
class Sale{
	//datta
	private $id;
	private $product_id;
	private $sales_at;
	private $quantity;
	private $pdo;

	//Setter Getter
	//method
	public function __Sale(){
	}
	public function all(){
		$result;
		$this->pdo=new PDO('mysql:host=localhost;dbname=webpro2examdb;charset=utf8','root','');
		try{
			$result=$this->pdo->query("SELECT * from sales as s,products as p where s.product_id=p.id;");
		}catch(PDOexception $e){
		var_dump($e->getMessage());
		}
		return $result;
	}
	public function save($product_id,$quantity){
		echo "Sale save";
		$this->pdo=new PDO('mysql:host=localhost;dbname=webpro2examdb;charset=utf8','root','');
		try{
			$stmt= $this->pdo->prepare('INSERT INTO sales (product_id,sales_at,quantity) VALUES (:p_id,:time,:quant)');
			$stmt->bindValue(':p_id',$product_id);
			$stmt->bindValue(':time',date('Y-m-d H:s'));
			$stmt->bindValue(':quant',$quantity);
			$stmt->execute();
			echo date('Y-m-d H:s');
		}catch(PDOexception $e){
		var_dump($e->getMessage());
		}
	}
}