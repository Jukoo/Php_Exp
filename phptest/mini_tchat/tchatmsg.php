<?php 
session_start();

require('Structure/connexion.php');

require('Structure/struc.php');

?>
<!--bloque du Formulaire -->

<div class ="container">
    <div class ="row">
         <div class="card my-4">
                <form method ="POST" action="Structure/threads.php" class= "form-control">
                     <label for="psd"> Pseudo: </label>
                             <input type="text" name ="pseudo" id="psd" placeholder="Votre Pseudo"class= "form-control" value ="<?php if (isset($_SESSION['pseudo'])){ echo $_SESSION['pseudo'];} ?>" required>
                         <label for="msg">Message: </label>
                              <textarea name="message" id="msg" cols="30" rows="10" placeholder ="Tapez votre message"class= "form-control"></textarea><br>
                        <input type="submit" name ="send" value ="Envoyer"class= "form-control btn-primary">
                </form>
                <small class= "text-muted"><?=(isset($_SESSION['error']))? $_SESSION['error'] :" "; ?></small>
            </div>
        </div>
    </div>
 
       
    </div>
        <div class="card mb-4">
            <div class="card-body">   
            <h5  class ="card-text card-footer alert-warning" ><a href="history.php?page=1">Voir l'historique  des messages </a></h5>
             <?php
              if (isset($_SESSION['pseudo'])){

              $ql=$DB->query('SELECT pseudo,message,DATE_FORMAT(moment, "%d-%m-%y à %Hh%imins%Ss" )AS momentum FROM tchat  ORDER BY  ID DESC LIMIT 5'); 
              while($data = $ql->fetch()){

              ?>      
                <h4 class ="card-title"><?=htmlspecialchars($data['pseudo']);?></h4>
                  <div class ="alert-info ">
                        <p class="card-text"><?=htmlspecialchars($data['message']);?></p><small class="text-muted"><?=$data['momentum'];?></small><br><br>
                    </div>
               <?php 
             }
            }
            else 
            {
            ?>
            <strong class="card-title">AU REVOIR !!!</strong>
            <small class ="text-muted card-text alert-info"> Pour Demarrer une Session il suiffit d'ecrire ton Pseudo et Envoyer un message! </small>   
             <?php 
            }
            ?>
            </div>
                 <div class="card-footer text-muted">
                     <small> &copy CopyRight : FunScript@outlook.fr</small>
                         <a href="Structure/threads.php?End_Session">Terminer votre Session</a>
                 </div>
            </div>
<!--fin de mon contenu-->
</div>