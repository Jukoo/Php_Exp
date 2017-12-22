    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none"></span>
        <span class="d-none d-lg-block">
          <img src="picture/<?=$data_User->avatar;?>" style="height: 50px ; width: 50px" class="rounded float-left">
          <a class="navbar-brand" href="home.php?id=<?=sha1($_SESSION['id']);?>"><?=isset($_SESSION['id']) && sha1($_SESSION['id']) == $_GET['id']?$data_User->pseudo: null ; ?></a>
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>

            <a class="nav-link js-scroll-trigger" href="home.php?id=<?=sha1($_SESSION['id']);?>"><img src="picture/home2.png" style="height: 50px ; width: 50px" ></a>
              
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li>
          <?php if(isset($_SESSION['id'],$_GET['id']) && sha1($_SESSION['id']) == $_GET['id']){ 
              ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="settings.php?id=<?=sha1($_SESSION['id'])?>&amp;set=build">Settings</a>
          </li>
              <?php
             }

              ?>
          <li class="nav-item">
           <a class="nav-link btn btn-danger" href="Disconect.php?id=<?=sha1($_SESSION['id']);?>">Deconnexion</a>
         </li>
        </ul>
      </div>
    </nav>
