<?php

 function Kill($db) { 

 die(print_r($db->errorInfo())) ; 

 }
function BindLimitParams($QueryLine,$start,$limit){ 

 	$QueryLine->bindParam(1, $start, PDO::PARAM_INT) ; 
    $QueryLine->bindParam(2,$limit,PDO::PARAM_INT) ; 
    
    return $QueryLine;
 	
}
