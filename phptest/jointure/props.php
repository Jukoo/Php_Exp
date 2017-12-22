<?php
require('../connexion/Dbcon.php');
if (isset($_POST['insert']) && !empty($_POST)){
    $props =strip_tags($_POST['prenom']);
    $name = htmlspecialchars($_POST['name']);
    $tel = (int)$_POST['tel'];
    $ql= $bdd->prepare('INSERT INTO proprietaire(prenom,nom,tel) VALUES(?,?,?)') or die(print_r($bdd->errorInfo()));
    $ql->execute(array($props,$name,$tel));
    header('location:props.php');
}
?>
<form method ='POST' action =''>
<input type="text" name="prenom" placeholder="prenom"> <br><br>
<input type="text" name="name"> <br><br>
<input type="text" name="tel"> <br><br>
<input type="submit" name="insert" value="inserré">
	
</form>
