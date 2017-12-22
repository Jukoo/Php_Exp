<?php 
require('../connexion/Dbcon.php'); 
//suppression 	
if(isset($_GET['del'])){
	$del = (int) $_GET['del'] ; 
	$up = $bdd->prepare('DELETE FROM blogs WHERE ID = ? '); 
	$up->execute(array($del));
	header("location:blogs.php");
}
//affichages des blogs
$count = $bdd->query('SELECT COUNT(*) AS blg FROM blogs');
$recive = $count->fetch();
echo $recive['blg'];
$blogpage= 2; 
//nombre de page  
$nbreBlogs = ceil($recive['blg']/$blogpage);

if (isset($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <=$nbreBlogs){
	$currentPage = (int)$_GET['page'];
	
	$star = ($currentPage)*$blogpage;
	$qlblog = $bdd->query('SELECT ID,UPPER(title) AS titre,contains, DATE_FORMAT(periode ,"%d/%m/%y à %Hh%imin%ss") AS post FROM blogs LIMIT '.$star.','.$blogpage) or die(print_r($bdd->errorInfo())); 
	while ($bd=$qlblog->fetch()) {
	?>
	<div class= "block" align="center">
	<h3><?=$bd['titre'];?> :  <small><?=$bd['post']?></small> </h3>
	<small align ="center"><?=$bd['contains']?></small><br>
	<a href="commentaire.php?index=<?=$bd['ID'];?>">Commentez</a>
	<a href="blogs.php?del=<?=$bd['ID'];?>">Suprimmer</a>
	</div>
	<?php 
	}
	$qlblog->closeCursor();
} elseif (!isset($_GET['page'])){
	$qlblog = $bdd->query('SELECT ID,UPPER(title) AS titre,contains, DATE_FORMAT(periode ,"%d/%m/%y à %Hh%imin%ss") AS post FROM blogs LIMIT 0,4') or die(print_r($bdd->errorInfo())); 
	while ($bd=$qlblog->fetch()) {
	?>
	<div class= "block" align="center">
	<h3><?=$bd['titre'];?> :  <small><?=$bd['post']?></small> </h3>
	<small align ="center"><?=$bd['contains']?></small><br>
	<a href="commentaire.php?index=<?=$bd['ID'];?>">Commentez</a>
	<a href="blogs.php?del=<?=$bd['ID'];?>">Suprimmer</a>
	</div>
	<?php 
	}
	$qlblog->closeCursor();
}
	?> 
	




<?php 
//insertion de blogs
if (isset($_POST['titre'],$_POST['contenu']) && !empty($_POST['titre'])&&!empty($_POST['contenu']) && !empty($_POST)) {
	$titre = strip_tags($_POST['titre']); 
	$contenu = htmlspecialchars($_POST['contenu']);
	$qlIns =$bdd->prepare('INSERT INTO blogs( title,contains) VALUES(:title,:container)');
	$qlIns->execute(array('title'=>$titre,'container'=>$contenu));
	header("location:blogs.php");

}
?>
<div align="center">
<h1> Poster un Blog </h1>
<form method ='POST' action =''>
<input type="text" name="titre" placeholder="titre"> <br><br>
<textarea type= 'text' name="contenu"></textarea><br><br>
<input type="submit" name="post">
	
</form>
</div><br><br>
<?php 
 for ($i =1 ; $i<=$nbreBlogs;$i++){
	 if(isset($_GET['page'])){
		if ($i == $_GET['page']){
			echo $i;
		}else{  
		echo '<a href =blogs.php?page='.$i.'>'.$i.'</a>'  ;
	   }
	 }else{
		echo '<a href =blogs.php?page='.$i.'>'.$i.'</a>'  ;
	 }
	
 }
?>
<script type ="text/javaScript">
document.body.style.backgroundColor="#bada55"; 
document.body.style.fontFamily="verdana"
</script>
