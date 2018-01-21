<?php 
include 'DIE.php';
// Insertion du topics sur   (home - homeIndex - index)
function InsertTopic ($autor , $title , $post)  { 

	global $dataBase ; 
	$ql = $dataBase->prepare('INSERT INTO Topics(auteur,titre,post,post_at)VALUES(?,?,?,NOW())')or Kill($dataBase);

	$ql->execute([$autor,$title,$post]) ; 

}

function CountEntry  () { 
	global $dataBase ; 

	$TotalEntry  = $dataBase->query("SELECT COUNT(*) as total FROM Topics")->fetch() or Kill($dataBase);

	return $TotalEntry ; 

}
// Selections  des 5 derniers topics (home - homeIndex - index)
function getTopics ($start , $final){ 

	global $dataBase ; 
	
	$ql = $dataBase->prepare("SELECT ID ,auteur, titre, post ,avt, DATE_FORMAT( post_at , '%d %M %y à %Hh:%im:%Ss') as Posted_at  FROM Topics ORDER BY ID desc  LIMIT ?,?") or Kill($dataBase) ; 

		BindLimitParams($ql,$start,$final)->execute() ; 
    

    $data = $ql->fetchAll() ; 

    return $data ; 


}

// recuperation du topics courrant (Topics - blogPost - topic)
function selectCurrenTopic ($id) { 

	global $dataBase ; 

	$ql = $dataBase->prepare("SELECT auteur, titre, post,avt,DATE_FORMAT( post_at , '%d %M %y à %Hh:%im:%Ss') as Posted_at  FROM Topics WHERE ID = ?")or Kill($dataBase) ;

	$ql->execute([$id]) ; 

	$data = $ql->fetch(); 
	
	return $data;
}

/*-----------------------
Section de commentaire 
-----------------------*/
//# insertion du commentaire sur le topic courrant 

function insertComments($UrlID ,$pseudo, $comment ) { 

	global $dataBase ; 

	$ql =$dataBase->prepare('INSERT INTO Comments(idTopics,author,comment) VALUES(:ref ,:pseudo,:com) ') or Kill($dataBase) ; 

	$ql->execute(['ref'=>$UrlID , "pseudo"=>$pseudo,"com"=>$comment]) ; 


}

//# Selection du commentaire correspondans pour chaque tôpic 

function selectComments ($relatedUrl ) { 

	global $dataBase ; 

	$ql = $dataBase->prepare("SELECT * FROM Comments WHERE idTopics = :IdUrl ORDER BY ID DESC") or Kill($dataBase) ; 

	$ql->execute(['IdUrl'=>$relatedUrl]) ; 

	$data = $ql->fetchAll() ; 

	return $data ; 
}
