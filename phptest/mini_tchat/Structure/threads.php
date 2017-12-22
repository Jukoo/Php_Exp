<?php
session_start();

require('connexion.php');

if (isset($_POST['send']) && !empty($_POST)){

    if(!empty($_POST['pseudo']) && !empty ($_POST['message'])){

        $pseudo = strip_tags($_POST['pseudo']);

        $_SESSION['pseudo'] = $pseudo; 

        $message = htmlspecialchars($_POST['message']);

        $save = $DB->prepare('INSERT INTO tchat (pseudo,message) VALUES(?,?)') or die(print_r($DB->errorInfo()));
      
        $save->execute(array($pseudo,$message,));

        $_SESSION['error'] =" ";
        
        header('location:../tchatmsg.php'); 
     
    }
    else
    {
        $_SESSION['error'] ="<stong class='alert-danger'> WARNING ! </strong>: Veuillez remplire les champs ! ";
        header('location:../tchatmsg.php');
    }
}

if (isset($_GET['End_Session'])){
    session_destroy();
    header('location:../tchatmsg.php');

}

?> 