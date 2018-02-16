<?php 

USE \juko\blogs\HomeRequest; 

include"Modeles/HomeRequest.php"; 

class home { 


	static function GlobalHome (){ 

		$BlogManager = new HomeRequest() ; 
		
		$PostperPage = 5 ;
		 
		$AllPost = $BlogManager->CountEntry() ; 

		$totalPage =ceil($AllPost->total/$PostperPage);

		if (isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <=$totalPage) { 

			$_GET['page'] = (int)($_GET['page']) ; 

			$currentPage = $_GET['page'] ; 

		}else { 

			$currentPage = 1;
		}

		$start = ($currentPage-1) *$PostperPage ; 

		$topics = $BlogManager->getTopics($start,$PostperPage) ; 

		foreach ($topics as $key => $value) {

			$topics[$key]->auteur = htmlspecialchars($value->auteur) ; 
			$topics[$key]->titre = htmlspecialchars($value->titre) ; 
			$topics[$key]->post = htmlspecialchars($value->post) ; 
			$topics[$key]->Posted_at = htmlspecialchars($value->Posted_at) ; 

	 	}

		if(isset($_GET['q']) && !empty($_GET['q'])){ 

			 $query  = htmlspecialchars($_GET['q']) ; 

			 $request = $BlogManager->Search($query) !==null ? $BlogManager->Search($query):null ; 


		}else { 

			$warn = "Aucune recherche effectue" ; 
		}

		 include"Views/homeIndex.php"; 

		 return  $AllPost;
	}
}