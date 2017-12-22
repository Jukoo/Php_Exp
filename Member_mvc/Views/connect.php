<?php include("template/head.php");?>
<?php include('template/nav.php');?>
<body>
    <div class ="container col-4">
<strong class ='btn alert-info'>Connexion</strong>

      <form action="" method="post" class ="form-group">
      
      <div class ='form-group'>
      <strong for="pseudo">Email ou Pseudo</strong>
      <input type="text" name='psd_Email' placeholder = 'Entrez votre pseudo' class ="form-control" value ='<?=(isset($psem))? $psem :null;?>'>
      </div>
      
      <div class ='form-group'>
      <strong for="pseudo"> Passwords</strong>
      <input type="password" name='pass' placeholder = '.........' class ="form-control">
      </div> <br>

      <div class ='form-group'>
     
      <label for="rmd" class="form-group"> <input type="checkbox" name="remindMe" id ="rmd" > Se Souvenir de Moi</label>
      </div>
      <br>

      <button type ='submit' class=' btn btn-info'>Se Connecter</button>

        <small class="text-muted alert alert-info">pas encore de compte <a href="inscription.php">Inscris-toi vite !</a></small>

     </form>
     <small class ='text-danger'> <?=(isset($err))?$err:null;?></small>
     </div>
     <script type="text/javascript" src ="utility/app.js" ></script>
</body>