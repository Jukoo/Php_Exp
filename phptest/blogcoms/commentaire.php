<?php 
include('../connexion/Dbcon.php');
// suppression d'un commentaire 
if (isset($_GET['del'])){
	$supp = (int) $_GET['del'];
	$del = $bdd->exec("DELETE FROM commentaire WHERE ID = $supp") or die(print_r($bdd->$errorInfo()));
	header('location:blogs.php');
}

//affichage du blog correspondant  
if (isset($_GET['index'])) {
	$id= (int)$_GET['index'];
$ql = $bdd->prepare('SELECT * FROM blogs WHERE ID=:id') or die(print_r($bdd->errorInfo())); 
$ql->execute(array('id'=>$id)); 
$bd=$ql->fetch();
}
?>
<a href="blogs.php"> Retour </a>
<h3><?=$bd['title'];?> : <small><?=$bd['periode']?></small> </h3>
<small><?=$bd['contains']?></small><br><br>
<?php
//Poste de commentaire
if (isset($_POST['auteur'],$_POST['propos'],$_POST['poster'],$_GET['index']) && !empty($_POST)){

	$leader = strip_tags($_POST['auteur']); 
	$com = htmlspecialchars($_POST['propos']);
	$blog_id = (int) $_GET['index'];
	$qlIns = $bdd->prepare('INSERT INTO commentaire(id_blog,auteur,propos) VALUES(?,?,?)') or die(print_r($bdd->errorInfo()));
	$qlIns->execute(array($blog_id,$leader,$com)); 
	header('location:commentaire.php?index='.$_GET['index']);

}
//affiche du commentaire concernant le blog
if (isset($_GET['index'])) {
	$id= (int)$_GET['index'];
$ql = $bdd->prepare('SELECT * FROM commentaire WHERE id_blog = :id') or die(print_r($bdd->errorInfo())); 
	$ql->execute(array('id'=>$id)); 
while($bd=$ql->fetch())
{
?>
<div class="com">
<h4><?=$bd['auteur'];?> : <small><?=$bd['datepub']?></small> </h4><a href="commentaire.php?del=<?=$bd['ID'];?>">x</a>
<small><?=$bd['propos']?></small><br>
</div><br>
<?php 
} 
}
?><br>
<h1>Ajouter un Commentraire à ce blogs</h1>
<form method ='POST' action =''>
<input type="text" name="auteur" placeholder="votre nom "id="user"><small id ="info"></small> <br><br>
<textarea type= 'text' name="propos"></textarea><br><br>
<input type="submit" name="poster" value='Poster!' id="btn">
</form>

<script type ="text/javaScript">
document.body.style.backgroundColor="#bada55"; 
document.body.style.fontFamily="verdana"
let com = document.querySelectorAll(".com")

document.getElementById('user').addEventListener('blur',function(ev){
	if (ev.target.value.indexOf('@')==-1){
		document.getElementById('info').textContent ="ajouter @ svp"
		document.getElementById('btn').disabled =true
	}else{
		document.getElementById('info').textContent ="verification..."
		window.setTimeout(function(){
			document.getElementById('info').textContent="Valide !"
		},2000)
		
		document.getElementById('btn').disabled =false
	}

})
for(let i=0;i<=com.length;i++){
	com[i].style.border ="1px solid white"
	com[i].style.borderRadius= "20px"
com[i].style.width ="550px"
com[i].style.backgroundColor="#cccc01"
}

</script>
 