
<?php include("template/head.php");?>

  <body>
      <?php include('template/nav.php');?>

      <div class ='container  col-4 '  >

      <strong class ='btn alert-info'>Inscription</strong>

      <form action="" method="post" class ="form-group">
      
      <div class ='form-group'>
      <strong for="pseudo"> Pseudo</strong>
      <input type="text" name='pseudo' placeholder = 'Entrez votre pseudo' class ="form-control" value ='<?=(isset($pseudo))? $pseudo :null;?>'>
      </div>
      
      <div class ='form-group'>
      <strong for="mail"> Email</strong>
      <input type="text" name='email' placeholder = 'xxxxx@domain.xxx...' class ="form-control" value ='<?=(isset($email))? $email :null;?>'>
      </div>
      
      <div class ='form-group'>
      <strong for="pseudo"> Passwords</strong>
      <input type="password" name='pass' placeholder = '.........' class ="form-control">
      </div>

      <div class ='form-group'>
      <strong for="pseudo">Password Confirm</strong>
      <input type="password" name='pwd' placeholder = '..........' class ="form-control">
      </div><br>

      <div class="form-group">
        <small class  ="text-muted">Option de Navigation </small>
      <label for="clr" class="form-control"><input type="radio" id ="clr" name="cloro" value="#343a40">Uniq system</label>
      <label for="dft" class="form-control"><input type="radio" id ="dft" name="cloro" value="whitesmoke">Default</label>


      </div>

      <button type ='submit' class=' btn btn-info'>S'inscrire</button>
      </form><br>
      <ul class ='alert alert-warning'>
      <?php if(!empty($errors)) {
           foreach($errors as $err) {
               ?>
               <li><?=$err;?></li>
      <?php
           }
         }
      ?>
      </ul>
      </div>
     
  <script type ="text/javascript" src="utility/app.js"></script>
  </body>
  
