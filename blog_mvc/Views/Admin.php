<?php 
$title  = "Espace d'administration";
require('template/collecTemplate.php')  ; 
?>
         <div class="col-md-6">
       <div class="card my-4">
            <h5 class="card-header">Topic </h5>
            <div class="card-body">
              
              <form action="" method="post" class="form-control" enctype="multipart/form-data"> 
                  
                  <input type="text" name="autor" placeholder="Auteur" class="form-control"><br><br> 
                  <input type="text" name="title" placeholder="Titre" class="form-control"><br><br>
                  
                  <textarea name="contains" id="" cols="30" rows="8" class="form-control" placeholder="type your text ... "></textarea><br><br>
                  <input type="submit" value ="Post&rarr;" class ="btn btn-primary"><br>
                   <div class="card-footer text-muted">
                    <?php if (isset($err)) :
                          foreach ($err as $value) :?>
                            <ul>
                              <li class="alert-warning"><?=$value;?></li>
                            </ul>
                           <?php   
                         endforeach ;                    
                         endif  ; 
                   ?>
                  </div>
              </form>
              
            </div>

          </div>
          </div>
 <?php 
 include ('template/footer.php') ; 
?> 