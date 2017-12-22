<?php 
session_start();
if(isset($_SESSION['id']) && $_SESSION['id'] !=null) { 
$_SESSION['id'] = null ; 
$_SESSION['pass'] = null; 
session_destroy() ; 
 header("location:login.php"); 
} 

?>