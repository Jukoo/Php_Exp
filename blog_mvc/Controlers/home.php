<?php 
 include"Modeles/globalQuery.php"  ; 

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
	    	InsertTopic($autor,$title,$contains) ; 
	    	header("location:index.php") ; 
	    }
}
$PostperPage = 5 ; 
$AllPost = CountEntry() ; 

$totalPage =ceil($AllPost->total/$PostperPage);

if (isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <=$totalPage) { 

	$_GET['page'] = (int)($_GET['page']) ; 

	$currentPage = $_GET['page'] ; 

}else { 

	$currentPage = 1;
}

$start = ($currentPage-1) *$PostperPage ; 

$topics = getTopics($start,$PostperPage) ; 

foreach ($topics as $key => $value) {

	$topics[$key]->auteur = htmlspecialchars($value->auteur) ; 
	$topics[$key]->titre = htmlspecialchars($value->titre) ; 
	$topics[$key]->post = htmlspecialchars($value->post) ; 
	$topics[$key]->Posted_at = htmlspecialchars($value->Posted_at) ; 

}	

//die(var_dump($topics));


 include"Views/homeIndex.php"; 


