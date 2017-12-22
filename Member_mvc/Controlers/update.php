<?php
session_start() ; 
require "Models/globalQuery.php" ; 
require "Modules/functions.php" ;

if (isset($_GET['set'],$_GET['id']) &&  !empty($_GET['set'])) { 

	$data_User = AutoSetinfo($_SESSION['id'],$_GET['id']); 

	

}else { 

	header("location : error.php") ; 

}


include "Views/mainset.php"; 