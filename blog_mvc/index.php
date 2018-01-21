<?php  
require"Modeles/connexion.php" ;

$lenPost=0;
try { 
	
	if (!isset($_GET['topics'])) { 

		require"Controlers/home.php";
		$lenPost = GlobalHome() ; 
		
    }elseif (isset($_GET['topics']) && !empty($_GET['topics'])) {

 			 $post = explode("-", $_GET['topics']) ; 

 			 if (is_numeric($post[0])) { 
 			 		$post = (int)$post[0] ;

 			 	if ($post){ 
					require'Controlers/Topics.php';
					Topics();
	 			}else { 
	 					throw new Exception("ERROr");
	 			}
	 			
 			 }else { 
 			 	throw new Exception("ERROr");
 			 	
 			 }
	}else { 

		throw new Exception("error404notFound");

	}
}catch (Exception $err) {
 
	$ErrMsg = $err->getMessage() ;

	require "Err404.php" ;

}

