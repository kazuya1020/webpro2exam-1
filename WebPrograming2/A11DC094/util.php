<?php

$database_host="localhost";
$database_name="webpro2examdb";
$database_user="root";

function IncludePathSetting($dispatche){
	$path='C://xampp/htdocs/webPrograming2/A11DC094/';
	$dispatche->setSystemRoot($path);
	set_include_path(get_include_path().PATH_SEPARATOR.$path);
}