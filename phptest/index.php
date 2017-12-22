<?php 
require "Poo.php";

$perso1= new charters("Ulgrim");

$perso2 = new charters('zandief'); 

$perso1->cry();
var_dump($perso1,$perso2);
 
$perso1->hurt($perso2); 
var_dump($perso1,$perso2);

$perso2->dead(); 
var_dump($perso2); 

$perso1->hurt($perso2); 

$perso2->dead(); 
 var_dump($perso2);

 $perso2->lifeup(60); 
  var_dump($perso2);
 

?>