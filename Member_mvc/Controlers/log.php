<?php
session_start() ; 
require "Models/globalQuery.php" ; 

if (isset($_POST) && !empty($_POST)) { 


     if (isset($_POST['psd_Email']) && !empty($_POST['psd_Email']) && !empty($_POST['pass'])) { 

             $psem = htmlspecialchars($_POST['psd_Email']) ; 
             $pass = htmlspecialchars($_POST['pass']) ; 
            
            if (password_verify($pass,Valid_User($psem)->password)) { 

                $_SESSION['id'] = Valid_User($psem)->ID ; 

                $url_Encode = sha1($_SESSION['id']) ; 


                 header("location:home.php?id=".$url_Encode); 

             }else  { 

             $err = "Email ou mot de passe invalide " ;
             
             }

     }else  { 

        $err = "veuillez saisir votre identifiant" ; 

     }
}

include "Views/connect.php" ; 