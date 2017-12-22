<?php 
 //:: Inscription 
// INSERTION DE NOUVEL UTILISATEUR

function insertUser ($pseudo , $email , $password) { 

     global $db ; 

     $ql = $db->prepare("INSERT INTO users(pseudo,password,email,signDate,avatar) VALUES (:psd,:pass,:email ,NOW(),:avatar)") or die(print_r($db->errorInfo())) ; 

     $ql->execute(['psd'=>$pseudo,'pass'=>$password,'email'=>$email,'avatar'=>'icon.png']); 


}

// VERIFICATION SI UN UTILISATEUR EXISTE DEJA DANS LA BASE DE DONNÉE 

 function userExist($pseudo,$email) { 

    global $db; 

    $ql =$db->prepare("SELECT pseudo,email FROM users WHERE pseudo = ? AND email = ? ") or die(print_r($db->errorInfo())) ; 
    $ql->execute([$pseudo,$email]) ; 
    $data = $ql->fetch() ; 
    if ($data) { 

        return  $data ;
    }
     
 }
 // :: Connexion
 //REQUETTE DE VERIFICATION D'UTILISATEUR DANS LA  BASE DE DONNÉES 

  function Valid_User($email) { 
    global $db ; 

    $ql= $db->prepare("SELECT * FROM users WHERE email =:email ")or die(print_r($db->errorInfo())) ; 

    $ql->execute(["email"=> $email]) ; 
   
    $data = $ql->fetch() ; 

    return $data ;
  }

// RECUPERATION DES DONNES PERSONNELLE DE L'UTILISATEURATEUR  
function fetch_Info($identity) { 

  global $db ; 

  $ql = $db->prepare('SELECT * FROM users WHERE ID =:id') or die(print_r($db->errorInfo)) ; 

  $ql->execute(['id'=>$identity]) ; 

  $data = $ql->fetch() ; 



  return $data ; 

}

 