<?php 
Namespace juko\blogs ; 

require_once 'connexion.php';


class TopicManager extends Database { 

	public function selectCurrenTopic ($id) { 


	$ql = $this->DB()->prepare("SELECT  ID , auteur, titre, post,avt,DATE_FORMAT( post_at , '%d %M %y à %Hh:%im:%Ss') as Posted_at  FROM Topics WHERE ID = ?")or $this->Kill($this->DB()) ;

	$ql->execute([$id]) ; 

	$data = $ql->fetch(); 
	
	return $data;
}

public function insertComments($UrlID ,$pseudo, $comment ) { 


	$ql = $this->DB()->prepare('INSERT INTO Comments(idTopics,author,comment) VALUES(:ref ,:pseudo,:com) ') or $this->Kill($this->DB()) ; 

	$ql->execute(['ref'=>$UrlID , "pseudo"=>$pseudo,"com"=>$comment]) ; 


}
	public function selectComments ($relatedUrl ) { 



		$ql = $this->DB()->prepare("SELECT * FROM Comments WHERE idTopics = :IdUrl ORDER BY ID DESC LIMIT 0 , 5") or $this->Kill($this->DB()) ; 

		$ql->execute(['IdUrl'=>$relatedUrl]) ; 

		$data = $ql->fetchAll() ; 

		return $data ; 
	}

	

}