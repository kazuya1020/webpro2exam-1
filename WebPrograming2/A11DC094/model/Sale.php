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
	public function __construct($arg_id=0,$arg_quant=0){
		$this->id=$arg_id;
		$this->quantity=$arg_quant;
		$this->sales_at=date('Y-m-d H:s');
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
	public function save(){
		echo "Sale save";
		echo "item Is".$this->id." ".$this->quantity." ".$this->sales_at."<br>";
		$this->pdo=new PDO('mysql:host=localhost;dbname=webpro2examdb;charset=utf8','root','');
		try{
			$stmt= $this->pdo->prepare('INSERT INTO sales (product_id,sales_at,quantity) VALUES (:p_id,:time,:quant)');
			$stmt->bindValue(':p_id',$this->id);
			$stmt->bindValue(':time',$this->sales_at);
			$stmt->bindValue(':quant',$this->quantity);
			$stmt->execute();
		}catch(PDOexception $e){
		var_dump($e->getMessage());
		}
	}
}