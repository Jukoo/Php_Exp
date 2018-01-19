<?php 
require"Modeles/connexion.php" ; 


if (!isset($_GET['topics'])) { 

	include"Controlers/home.php" ;

}elseif (isset($_GET['topics']) && !empty($_GET['topics'])) { 

	include"Controlers/Topics.php" ; 

}
