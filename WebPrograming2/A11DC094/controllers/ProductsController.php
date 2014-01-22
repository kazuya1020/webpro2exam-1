<?php
require_once 'model/Product.php';
class ProductsController{
	public function __ProductsController(){
	}
	public function indexAction(){
		echo "ProductsController indexAction";
		$db=new Product();
		$result=$db->all();
		$items=array();
		while($row=$result->fetch(PDO::FETCH_ASSOC))
			array_push($items, array('id'=>$row['id'],'name'=>$row['name'],'price'=>$row['price']));
		include('view/products/index.php');
	}
}