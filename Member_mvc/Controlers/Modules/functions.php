<?php

function AutoSetinfo ($sessionID , $urlID) { 

	if (isset($sessionID ,$urlID) && sha1($sessionID) == $urlID) { 

	$id_key = (int)$sessionID ; 

    return fetch_Info($id_key); 


	 } else  { 

	 	header('location:error.php') ; 
	 }

}
