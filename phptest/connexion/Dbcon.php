<?php 
try {
	$bdd = new PDO('mysql:host=localhost;dbname=phphtest;charset=utf8','root','', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));

} catch (Exeception $err ) { 

		 die('system _Failure'.$err->getMessage());
}

?> 