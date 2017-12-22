<?php 
require "Models/globalQuery.php" ; 
if (isset($_POST) && !empty($_POST)) {

$errors = array() ; 

    if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) { 
        $pseudo = htmlentities($_POST['pseudo']) ; 

        if (isset($_POST['email']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) { 

            $email = htmlspecialchars($_POST['email']) ; 

               if (userExist($pseudo,$email)) { 

                 $errors['existe'] ="Email ou pseudo deja pris :(  "  ;

               } 

                if (isset($_POST['pass'] , $_POST['pwd'])) { 

                       if ( $_POST['pwd'] == $_POST['pass']) {   

                             $password = password_hash($_POST['pass'],PASSWORD_BCRYPT);

                          }else  { 

                            $errors['notIdentique'] =" les  mots de passe sont pas conforme" ;
                          }
                }else  { 

                    $errors['pwd'] = "veuillez entrer votre mot de pass" ; 
                }

        }else  { 

            $errors['emal']="Email invalide ! veuillez verifier votre email" ; 
        }

    }else { 

        $errors['pseudo'] ="veuillez entrer votre pseudo " ; 
    }

    // enregistrement de 'utilisateur si ya pas d'erreurs 

     if (empty($errors)) { 

        insertUser($pseudo,$email,$password) ; 
        header('location:login.php') ; 

        }

}




include "Views/index.php";