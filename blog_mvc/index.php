<?php  

function autoload($class) { 

	require "Controlers/".$class.'.php' ; 
}

spl_autoload_register('autoload');

try { 
	
	if (!isset($_GET['topics']) && !isset($_GET['panel'])) { 

				home::GlobalHome() ;
		
    }elseif (isset($_GET['topics']) && !empty($_GET['topics'])) {

					$topic = new Topics(); 
					$topic->topics();

	}elseif (isset($_GET['panel'])) {

			
			AdminPanel::AdminControl() ; 

	}else { 

		throw new Exception("error404notFound");

	}
}catch (Exception $err) {
 
	$ErrMsg = $err->getMessage() ;

	require "Err404.php" ;

}

