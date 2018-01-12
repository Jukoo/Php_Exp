<?php 
try { 
$dataBase = new PDO('mysql:host=localhost;dbname=blogs;charset=utf8',"root","",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]) ; 

$dataBase->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ) ; 

//die(var_dump($dataBase));

}catch (Exception $err) { 

	die('Cannot connect to the server  '.$err->getMessage());
}