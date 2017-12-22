<?php 
include("template/head.php");
include("template/r_nav.php");
?>

<body>
    <div class ="container col-4" style="top: 30px">
<strong class ='btn alert-info'>Modification de Profil</strong>

      <form action="" method="post" class ="form-group" enctype="multipart/form-data">
      
      <div class ='form-group'>
      <strong for="pseudo">Pseudo</strong>
      <input type="text" name='pseudo' placeholder = 'Entrez votre pseudo' class ="form-control" value ='<?=(isset($pseudo))? $pseudo :null;?>'>
      </div>
      
      <div class ='form-group'>
      <strong for="pseudo"> Ajouter votre Photo</strong>
      <input type="file" name='avatar' class ="form-control">
      </div> <br>

   		
      <button type ='submit' name ="update" class=' btn btn-info'>Mettre à jour </button>
       
     </form>
     <small class ='text-danger'><?=(isset($err))?$err:null;?></small>
     </div>
     <script type="text/javascript" src ="utility/app.js" ></script>
</body>