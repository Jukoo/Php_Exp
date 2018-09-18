<?@session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="public/css/MaterialiazeCss/materialize.min.css">
  <link rel="stylesheet" href="public/css/BoostraperCss/boostrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  <title><?= $title ;?></title>
</head>
<body>
<div class="nav-top" id="start"></div>
<main>
  <nav>
    <div class="nav-wrapper blue-grey darken-4">
      <a href="index.php" class="brand-logo">SamaZone</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><div class="chip">
            <img src="public/img/jklogo.png">
               Jukoo
         </div></li>
        <li><a href="index.php?OAuth" class="btn-small">sing Up</a></li>
        <li><a href="index.php?log" class="btn-small">Log In</a></li>
      </ul>
    </div>
  </nav>
  <!-- nav EX
  <nav class="nav-extended blue-grey darken-4">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">SamaZone</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#"><i class="small material-icons">local_grocery_store1 </i></a></li>
        <li><a href="index.php?OAuth" class="btn-small">singIn or LogIn</a></li>
        <li><a href="collapsible.html"></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><i class="small material-icons">my_location</i> <small>Adress de livraison :  </small> <span id="location"></span> </li>
        <li class="tab"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
  </nav>
-->
</main>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
  </ul>
</div>

<? if(empty($_GET)):?>
<div class="">
<? else :?>
<div class="container">
<? endif ?>
  <div class="row">
    <? if (isset($_GET["p"]) && !empty($_GET["p"])) : ?>
    <div class="list-categories col s2  card small">
      <h4>Profil</h4>
      <div class="name">
        <p>Nom : </p>
      </div>
      <div class="">
        <p>Email</p>
      </div>
      <div class="">
        <p> <i class="small material-icons">local_grocery_store1 :1 <span id="purchase">0</span> </i> </p>
      </div>
      <div class="">
        <p>Status : premium</p>
      </div>
  <button type="submit" class="btn  orange darken-4 ">Log Out <i class="small material-icons">trending_flat</i></button>
     </div>
   <? endif ?>

    <?= $Contents ?>


  </div>
</div>
  <div class="subliminal grey darken-3" width="100%">
      <div class="container ">
        <h6 >SamaZone</h6>
          <smallclass="grey-text text-lighten-4">share Items near to you </small>
      </div>

  <footer class="page-footer blue-grey darken-3">

            <div class="container">
              <div class="row">

                    <div class="col s3">
                  <h6>Mieux nous  connaitre</h6>

                  <ul>
                    <li></li>
                  </ul>
                </div>
                <div class="col  s3">
                  <h6 class="white-text">Powered by :</h6>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">php</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">js</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">materialize css </a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">join me on github to collaborate </a></li>
                  </ul>
                </div>
                <div class=" col s3">
                  <h6>Moyen de  Payement sur SamaZone</6>
                </div>
                <div class="col s3">
                  <h6> Besoin d'aide ?</h6>
                  <ul>
                    <li></li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="footer-copyright blue-grey darken4">
              <div class="container">
              © 2018 SamaZone inc All Right Reserved
              <a class="grey-text text-lighten-4 right" href="#start">Back to up </a>
              </div>
            </div>
          </footer>
          <script src = "public/js/assets/support.newage.js">
          </script>
          <script type="text/javascript">
           let Es6support = new isECMAScript_supported()
           if (Es6support.isES6_supported()) console.log("yes")

          </script>
        </body>
        </html>
