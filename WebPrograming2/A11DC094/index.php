<?php
	require_once 'Dispatcher.php';
	require_once 'util.php';
	$dispatcher=new Dispatcher();
	IncludePathSetting($dispatcher);
	$dispatcher->setPramlevel(2);
	$dispatcher->dispatch();
?>