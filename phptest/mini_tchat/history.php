<?php 
require('Structure/connexion.php');
include('Structure/struc.php');

?>

<div class="container">
      
<?php
// Requette et PAgination ! 
$count = $DB->query('SELECT COUNT(*) AS Entry FROM tchat');
$get_count = $count->fetch();
$currentPage;
$view =5;
$messages = $get_count['Entry']/$view;
if (isset($_GET['page']) && $_GET['page'] >0 && $_GET['page'] <=$messages){

$currentPage= (int) $_GET['page'];

$count_Star = ($currentPage-1)*$view;

// supression 
if (isset($_GET['del'])){

    $del =(int) $_GET['del'];
    $remove= $DB->prepare('DELETE FROM tchat WHERE ID = :id');
    $remove->execute(array('id'=>$del));
    header('location:history.php?page='.$currentPage."&amp;del");
}

$history = $DB->query('SELECT ID, pseudo ,message , DATE_FORMAT(moment,"%d-%m-%y à %Hh%imin(s)%Ss") AS momentum FROM tchat ORDER BY ID DESC LIMIT '.$count_Star.','.$view) or die(print_r($DB->errorInfo()));
while($get_history = $history->fetch()){

?>
<div>
        <div class="card-mb-4">
             <div class="card-body">
                 <h4 class="card-text"><?=htmlspecialchars($get_history['pseudo']);?></h4><small>POSTER à : <?=$get_history['momentum'];?></small><br>
                 <small class ="card-text alert-info"> <?= htmlspecialchars($get_history['message']);?></small><br>
                <button><a href="history.php?page=<?=$currentPage;?>&amp;del=<?=$get_history['ID'];?>" title ="suprrimer"> Delete!</a></button>
             </div>
        </div>
</div>
<?php 
}
}else {
    $currentPage=1;
}
?>    
     <div class="card-footer text-muted">
            <small> &copy CopyRight : FunScript@outlook.fr</small>
             <a href="tchatmsg.php">Retour au tchat !</a>
           </div>
     </div>
</div>
<?php 
//pagination : 
    for ($i=1;$i<=$messages;$i++){

        if($i==$currentPage){

         echo $i;

         }else{

         echo  "<a href=history.php?page=".$i." class='card-text alert-primary' >".$i."-</a>";   
         
         }

    }
?>