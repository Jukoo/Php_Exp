<?php 
 require "Modeles/globalQuery.php" ; 

function Topics(){ 

	if(isset($_GET['topics']) &&  !empty($_GET['topics']) && $_GET['topics'] > 0 ) { 

 		$id  = htmlspecialchars($_GET['topics']) ; 

	    $currenTopics = selectCurrenTopic($id) ; 

	    $relatedCom = selectComments($id);

	    if(isset($_POST) && !empty($_POST)) { 

	    
	    	if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) { 

	 	   		$pseudo  = htmlspecialchars($_POST['pseudo']) ; 

	 	   		if (isset($_POST['commentary']) && !empty($_POST['commentary'])) { 
   
	 	      			$comment = htmlspecialchars($_POST['commentary']) ; 
	 		
			 	        insertComments($id,$pseudo,$comment) ; 
			 	        #fixed
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

include "Views/blogPost.php";


}

