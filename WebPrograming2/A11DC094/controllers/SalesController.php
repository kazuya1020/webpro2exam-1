<?php
require_once 'model/Sale.php';
require_once 'model/Product.php';
class SalesController{
	public function __SalesController(){
	}
	public function indexAction(){
		//echo "SalesController indexAction";
		$db=new Sale();
		$result=$db->all();
		$logs=array();
		while($row=$result->fetch(PDO::FETCH_ASSOC)) {
			array_push($logs, array(
				'date'=>$row['sales_at'],
				'name'=>$row['name'],
				'quantity'=>$row['quantity'],
				'price'=>(int)$row['price']*(int)$row['quantity']));
		}
		include('view/sales/index.php');
	}
	public function newAction(){
		//echo "SalesController newAction";
		$item=new Product();
		$list=$item->load($_GET['id']);
		$row=$list->fetch(PDO::FETCH_ASSOC);
		include('view/sales/new.php');
	}
	public function createAction(){
		// "SalesController createAction";
		$sale=new Sale($_POST['id'],$_POST['quantity']);
		$sale->save();
		//echo $_POST['quantity'];
		//echo $_POST['id'];
		header("location:/webPrograming2/A11DC094/Products/index");
	}
}