<?php 
session_start();
include('connexion/Dbcon.php');
// requette de supression 
if (isset($_GET['del'])){
	$ID = (int) $_GET['del']; 
	$del = $bdd->prepare('DELETE FROM tchat WHERE ID =:id') or die(print_r($bdd->$errorInfo()));
	$del->execute(array('id'=>$ID));
	header('location:tchat.php');
	
}
//requette de Selection 
$ql = $bdd->query("SELECT  ID,pseudo, message, DATE_FORMAT(post,'%d/%m/%y à %Hh %imin %ss') AS date_post  FROM tchat ORDER BY ID DESC LIMIT 5") or die(print_r($bdd->errorInfo())); 
?>
	<div id="tchat" align ="center">
		<?php while ($msg = $ql->fetch()) {
		?>
		<strong><?= $msg['pseudo'];?></strong>   <small><?=$msg['date_post'];?></small><a href="tchat.php?del=<?=$msg['ID'];?>" id="sup"> x </a><br><br>
		<small> <?= $msg['message'];?></small><br><br>
		<?php
		}
		
		 ?><br>

<form method="post" action ="connexion/threads.php">
	<strong>Pseudo : </strong><br><input type="text" name="pseudo" placeholder="pseudo" value="<?php if(isset($_SESSION['pseudo'])){echo $_SESSION['pseudo'];}?>"><br><br>
	 <mark>Message : </mark><br><textarea type='text' placeholder="tapez votre message" name ="message" require></textarea><br><br>
	<input type="submit" name="send" value="Envoyer">
	</form>
		

		 <a href ="historique.php"> voir tous les messages</a>
	
		 </div>
 <script src ='getAjax.js'></script>
<script>
document.body.style.backgroundColor='#bada55';
document.body.style.fontFamily ="verdana"
 /*let tchat = document.getElementById('tchat')
 	window.setInterval(Reload('reload.php',function(res){
			 tchat.innerHTML = res;
			 console.log(tchat)
 		},true),1000)*/

let trash= document.querySelectorAll('#sup');
if (trash){
	for (let i = 0; i<= trash.length; i++){
		let index = trash[i];
if (index){
		index.addEventListener("click", function(ev){
				
			let permission = confirm("Etes vous sur de vouloir supprimer ce message!?");
		if (!permission){
				ev.preventDefault();
			}
		})
}

 }

}else { 
	alert('Aucun message a ete poster  !')
}




 
		 </script>

