<?php
require_once 'model/Sale.php';
require_once 'model/Product.php';
class SalesController{
	public function __SalesController(){
	}
	public function indexAction(){
		echo "SalesController indexAction";
		$db=new Sale();
		include('view/sales/index.php');
	}
	public function newAction(){
		echo "SalesController newAction";
		$item=new Product();
		include('view/sales/new.php');
	}
	public function createAction(){
		echo "SalesController createAction";
		$sale=new Sale();
		$sale->save($_POST['id'],$_POST['quantity']);
		echo $_POST['quantity'];
		echo $_POST['id'];
		header("location:/webPrograming2/A11DC094/Products/index");
	}
}