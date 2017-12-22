<?php 
session_start(); 
//traitement 
include('Dbcon.php'); 
if (isset($_POST['pseudo'],$_POST['message'],$_POST['send'])&& !empty($_POST)){


	$pseudo=strip_tags($_POST['pseudo']);
	$_SESSION['pseudo'] = $pseudo ;  

	$message = htmlspecialchars($_POST['message']);

	//setcookie("pseudo",$pseudo,time()+20*24*3600,null,null,false,true);

	$ql=$bdd->prepare("INSERT INTO tchat(pseudo,message) VALUES(:psd,:msg)") or die(print_r($bdd->errorInfo()));


	$ql->execute(array('psd'=>$pseudo,'msg'=>$message));

header("location:../tchat.php");
}else { 
echo "veuiller remplir les champs";
}
?>