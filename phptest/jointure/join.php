<?php 
 require('../connexion/Dbcon.php');
// jointure  avec where
 $ql = $bdd->query('SELECT games.nom AS jeu, proprietaire.prenom AS props FROM
games,proprietaire WHERE games.ID_proprietaire = proprietaire.ID');

 while($gameData = $ql->fetch()){
echo nl2br($gameData['jeu'].'=>'.$gameData['props']."<br>");
 }
$ql->closeCursor();
 
$ql=$bdd->query('SELECT g.nom jeu , p.prenom props FROM games g,proprietaire p  WHERE g.ID_proprietaire=p.ID');

 while($gameData = $ql->fetch()){
echo nl2br("<strong>".$gameData['jeu'].'=>'.$gameData['props']."</strong><br>" );
 }

 $ql->closeCursor();
 
  //jointure avec JOIN 

$ql = $bdd->query("SELECT g.nom jeu , p.prenom props FROM proprietaire p 
INNER  JOIN games g ON g.ID_proprietaire = p.ID");
 while($gameData = $ql->fetch()){
  echo nl2br($gameData['jeu'].'=>'.$gameData['props'] );
   }
  
   $ql->closeCursor();

   $request=$bdd->query('SELECT g.nom jeu ,p.prenom props FROM proprietaire p INNER JOIN games g ON g.ID_proprietaire = p.ID WHERE g.console ="PC"');
    while($dataRequire =$request->fetch()){
      echo '<small>'.$dataRequire['jeu']."=>".$dataRequire['props']."</small><br>"; 
    }
   

?>

}


UPDATE users set 