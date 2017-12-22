<body align ="center">
<?php
include("/connexion/Dbcon.php"); 
//systeme de pagination 
$count = $bdd->query('SELECT COUNT(*) AS msgH FROM tchat');

$nbreDentre = $count->fetch(); 

$totalEntry = $nbreDentre['msgH']; 

$affichage = 10; 

$nbrePage = ceil($totalEntry/$affichage); 

if(isset($_GET['page']) && $_GET['page'] > 0  && $_GET['page']<=$nbrePage){

    $currentPage = (int) $_GET['page']; 

    $debut = ($currentPage-1)*$affichage;

    $history= $bdd->query("SELECT * FROM tchat LIMIT ".$debut.','.$affichage); 

    while ($msg = $history->fetch()) {

?>


        <strong><?= $msg['pseudo'];?></strong><br>

        <mark> <?= $msg['message'];?></mark><br>

        <?php

}


}else {

    $currentPage=1;

        }

?>

 
 <?php 

for ($i=1;$i<=$nbrePage;$i++){

    if ($i == $currentPage){

        echo "$i /";

    }else {

        echo "<a href=historique.php?page=".$i.">".$i."/</a>" ;  
        
      }
     
  }
 ?>


 <a href="tchat.php"> retourner au tchat !</a>

 </body>