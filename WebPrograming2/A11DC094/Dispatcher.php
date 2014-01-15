<?php
class Dispatcher
{
	private $sysRoot;
	private $paramLevel=1;
	public function setSystemRoot($path){
		$this->sysRoot=rtrim($path,'/');
	}
	public function setPramlevel($iLevel){
		$this->paramLevel=$iLevel;
	}
	public function dispatch(){
		$params_tmp=array();
		$params_tmp=explode('?',$_SERVER['REQUEST_URI']);
		$params_tmp[0]=preg_replace('/\\/?$/', '', $params_tmp[0]);
		$params_tmp[0]=preg_replace('/^\\//', '', $params_tmp[0]);
		$params=array();
		if(''!=$params_tmp[0]){
			$params=explode('/',$params_tmp[0]);
		}
		$controller="index";
		if($this->paramLevel<count($params)){
			$controller=$params[$this->paramLevel];
		}
		$className=ucfirst(strtolower($controller)).'Controller';
		require_once $this->sysRoot.'/controllers/'.$className.'.php';
		$url="/";
		for($i=0;$i<$this->paramLevel;$i++){
			$url=$url.$params[$i].'/';
		}
		$controllerInstance= new $className($url);

		$action='index';

		if(($this->paramLevel + 1)<count($params)){
			$action=$params[($this->paramLevel+1)];
		}
		$actionMethod=$action.'Action';
		$controllerInstance->$actionMethod();
	}
}