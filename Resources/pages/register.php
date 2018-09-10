  <h4> Welcome to Service OAuth : </h4>
<div class="row">

<!--SING IN -->

<? if(!isset($_GET["p"]) || !isset($_SESSION["login"])) : ?>
  <div class="col s6">

    <h6> INSCRIPTION </h6>
  <form method="post">
    <div class="form-group">
      <label for="inputAddress2">Pseudo</label>
      <input type="text" name="psdname" class="form-control" id="PseudoName" placeholder="Pseudo" >
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email"  name = "e-mail"class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="pswd" class="form-control" id="Password4" placeholder="......."required>
    </div>
  </div>
  <div class="form-group col-md-2">
    <label for="inputZip"> Confirm Password </label>
    <input type="password" class="form-control" id="PswConfirmed" placeholder="........" required>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text"  name ="address"class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>

  </div>

  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
<div class="">
<p>
<a class="waves-effect waves-light btn-small"><i class="material-icons right">cloud</i>Sign In  with Google Account</a>
</p>
</div>
<p> OR </p>
<div class="">
  <p>
<a class="waves-effect waves-light btn-small"><i class="material-icons right">cloud</i>Sing In with FaceBook Account</a>
</p>
</div>
</div>
<? endif;?>


<!---CONNEXION -->


  <!-- -->
  <div class="col s6">
    <h6>CONNEXION</h6>
    <div class="form-connexion">
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <a href="#"><i class="small material-icons">remove_red_eye</i></a>
  </div>

  <button type="submit" class="btn grey darken-3">Log In <i class="small material-icons">trending_flat</i></button>
</form>
</div>
<div class="">
<p>
<a class="waves-effect waves-light btn-small"><i class="material-icons right">cloud</i>Connect with Google Account</a>
</p>
</div>
 <p>OR</p>
<div class="">
  <p>
<a class="waves-effect waves-light btn-small"><i class="material-icons right">cloud</i>Connect with FaceBook Account</a>
</p>
</div>
  </div>

</div>
