<?php
use juko\blogs\AdminManager ; 
require "Modeles/AdminManager.php"; 

class AdminPanel { 


	static function AdminControl (){ 
		$BlogManager = new AdminManager() ; 
		if (isset($_POST) && !empty($_POST)) { 

		$err = array() ; 

		if (isset($_POST['autor']) && !empty($_POST['autor'])) { 

			$autor = htmlspecialchars($_POST['autor']) ; 
			if (isset($_POST['title']) && !empty($_POST['title'])) { 

				$title = htmlspecialchars($_POST['title']) ; 

				if (isset($_POST['contains']) && !empty($_POST['contains'])) { 
				$contains = htmlspecialchars($_POST['contains']);

			}else { 
			$err['fromContains']="Votre Topic est Vide" ; 
			}

			}else { 
				$err['fromTitle']="il faut absolument un titre ! ";
			}

		    }else{ 

		    $err['fromAutor'] ="Vous devez fournir votre nom " ; 	
		    }
		    if (empty($err) || !isset($err)) { 
		    	$BlogManager->InsertTopic($autor,$title,$contains) ; 
		    	header("location:index.php") ; 
		    }
		}
			include "Views/Admin.php";
	}

}