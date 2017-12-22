<?php 
try {
$DB = new PDO('mysql:host=localhost;dbname=tchats;charset=utf8',"root","",[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]);
}
catch(Exception $err){
    die("Error Found : ".$err->getMessage());
}

?>