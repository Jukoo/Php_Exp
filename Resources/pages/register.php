
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

  <button type="submit" class="btn btn-primary" name="signIn" value="OAuthficate">Sign in</button>
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
</div>
