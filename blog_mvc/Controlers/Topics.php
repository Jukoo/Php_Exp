<?php 
 require "Modeles/globalQuery.php" ; 

if(isset($_GET['id']) &&  !empty($_GET['id']) && $_GET['id'] > 0 ) { 

 		$id  = htmlspecialchars($_GET['id']) ; 

	    $currenTopics = selectCurrenTopic($id) ; 

	    $relatedCom = selectComments($id);

	    if(isset($_POST) && !empty($_POST)) { 

	    
	     if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) { 

	 	   $pseudo  = htmlspecialchars($_POST['pseudo']) ; 

	 	    if (isset($_POST['commentary']) && !empty($_POST['commentary'])) { 
   
	 	      $comment = htmlspecialchars($_POST['commentary']) ; 
	 		
	 	        insertComments($id,$pseudo,$comment) ; 

	 	        header('location:topics.php?id='.$id);

			 	}else { 

			 	   $warning ="";
			 	}

	    }else { 
	 	
	 	   $warning= "Veuillez fournir votre pseudo" ; 

	    }
 	
	 
   }	 		


	   
	 
}else { 

	header('location:index.php');
}




include "Views/blogPost.php";