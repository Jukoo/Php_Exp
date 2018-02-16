<?php 
Namespace juko\blogs ; 

require_once "connexion.php" ; 

class AdminManager extends DataBase { 

	
	public function InsertTopic ($autor , $title , $post)  { 

		
		$ql = $this->DB()->prepare('INSERT INTO Topics(auteur,titre,post,post_at)VALUES(?,?,?,NOW())')or $this->Kill($this->DB());

		$ql->execute([$autor,$title,$post]) ; 

	}

}