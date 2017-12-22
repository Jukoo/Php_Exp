<?php 
 try { 
    $db = new PDO("mysql:host=localhost;dbname=members;charset=UTF8","root","",[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]) ; 

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_OBJ) ; 

 }catch(Exception $err){

     die('Error'.$err->getMessage());
 }


