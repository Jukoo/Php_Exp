<?php
Namespace juko\blogs; 
USE \PDO  ; 

require_once 'connexion.php' ; 
class HomeRequest extends DataBase  { 

	private  function BindLimitParams($QueryLine,$start,$limit){ 

	 	$QueryLine->bindParam(1, $start, PDO::PARAM_INT) ; 
	    $QueryLine->bindParam(2, $limit,  PDO::PARAM_INT) ; 
	    
	    return $QueryLine;
	 	
			}
	
	public function getTopics ($start , $final){ 

	
	
	$ql = $this->DB()->prepare("SELECT ID ,auteur, titre, post ,avt, DATE_FORMAT( post_at , '%d %M %y à %Hh:%im:%Ss') as Posted_at  FROM Topics ORDER BY ID desc  LIMIT ?,?") or $this->Kill($this->DB()) ; 

		$this->BindLimitParams($ql,$start,$final)->execute() ; 
    

    $data = $ql->fetchAll() ; 

    return $data ; 


 	} 
 	public function Search($query) { 


			$ql = $this->DB()->prepare("SELECT * FROM Topics WHERE auteur =':q' ORDER BY ID DESC") or $this->Kill($this->DB()) ; 

			 $ql->execute(['q'=>$query]);

			 $data = $ql->fetchAll() ; 

			return $data; 
	}
	
	public function CountEntry  () { 


		$TotalEntry  = $this->DB()->query("SELECT COUNT(*) as total FROM Topics")->fetch() or Kill($this->DB());

		return $TotalEntry ; 

	}


}
