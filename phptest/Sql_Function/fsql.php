<?php
include('../connexion/Dbcon.php'); 
// les fonction scalaire 
$ql = $bdd->query('SELECT UPPER (nom) AS game FROM jeux_video'); 
while ($data = $ql->fetch()) {
	echo "<strong>".$data['game']."</strong><br>";

}
$ql->closeCursor();
// les fonctions d'agregat 
$af = $bdd->query('SELECT  ROUND(AVG(ROUND(prix,2)),2) AS moyenne_prix FROM jeux_video'); 
$data = $af->fetch(); 
echo  "la moyenne des prix vaut : ".$data['moyenne_prix'];

$value=$bdd->query('SELECT SUM(prix) AS price, possesseur FROM jeux_video GROUP BY possesseur HAVING price <= 200 ORDER BY price DESC');
while ($data = $value->fetch()){

echo  "<p> prix =>: ".$data['price'].": =>".$data['possesseur'];
}

$af->closeCursor();

 ?> 
 