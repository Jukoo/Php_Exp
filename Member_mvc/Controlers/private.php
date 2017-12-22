<?php 
session_start() ;
require "Models/globalQuery.php";
require "Modules/functions.php" ;


 if (isset($_GET['id']) && !empty($_GET)) { 

  $data_User = AutoSetinfo($_SESSION['id'],$_GET['id']) ; 

 }


 include "Views/personal.php"; 
