<?php
require_once 'model/Product.php';
class ProductsController{
	public function __ProductsController(){
	}
	public function indexAction(){
		echo "ProductsController indexAction";
		$db=new Product();
		include('view/products/index.php');
	}
}