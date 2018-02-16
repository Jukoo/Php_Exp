<?php 
Use juko\blogs\TopicManager; 

include"Modeles/TopicManager.php"  ; 

Class Topics { 

	public function topics () { 

		$TopicManager  = new TopicManager() ; 
		
		if(isset($_GET['topics']) &&  !empty($_GET['topics']) && $_GET['topics'] > 0 ) { 

	 		$id  = htmlspecialchars($_GET['topics']) ; 

		    $currenTopics = $TopicManager->selectCurrenTopic($id) ; 

		    $relatedCom = $TopicManager->selectComments($id);

		    if(isset($_POST) && !empty($_POST)) { 

		    
		    	if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) { 

		 	   		$pseudo  = htmlspecialchars($_POST['pseudo']) ; 

		 	   		if (isset($_POST['commentary']) && !empty($_POST['commentary'])) { 
	   
		 	      			$comment = htmlspecialchars($_POST['commentary']) ; 
		 		
				 	        $TopicManager->insertComments($id,$pseudo,$comment) ; 

				 	        header('location:index-topics-'.$id);
				 	}else { 
				 	  		 $warning ="desole vous pouvez pas poster un commentaire vide";
				 	}

		   		 }else { 
		 	
		 	  		$warning= "Veuillez fournir votre pseudo" ; 
		   		 }
	 	
			}	 		

		}else { 

			header('location:index.php');
		}

	if(isset($_GET['q']) && !empty($_GET['q'])){ 

		$query  = htmlspecialchars($_GET['q']) ; 

		 $request = Search($query) !==null ? Search($query):null ; 


	}else { 

		$warn = "Aucune recherche effectue" ; 
	}


	include "Views/blogPost.php";


	}
}

