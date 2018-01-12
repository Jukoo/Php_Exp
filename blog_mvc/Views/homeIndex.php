
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <title>blogs MVC</title>

    <!-- Bootstrap core CSS -->
    <link href="Style/style.min.css" rel="stylesheet">

    <!-- Custom styles for this template     <link href="css/blog-home.css" rel="stylesheet">
-->

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container">
        <a class="navbar-brand" href="index.php">Blogs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Blogs
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-6 ">

          <h1 class="my-4">BlogSpace
            <small>Share your Idea ! </small>
          </h1>

          <!-- Blog Post -->
          <?php 
            foreach ($topics as $value) {


              ?> 
           
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?=$value->titre;?></h2>
              <p class="card-text"><?=$value->post;?></p>

              <a href="topics.php?id=<?=$value->ID;?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
            Posted At  :  <?=$value->Posted_at;?> By 
              <a href="#"> <?=$value->auteur;?></a>
            </div>
          </div>

           <?php 

            }

          ?>

          <!-- Pagination -->
          <?php 

          for ($i=1; $i<= $totalPage ; $i++) { 
            if ($i == $currentPage) { 
                echo  $i;
            }else { 
              echo "<a href=index.php?page=".$i.">".$i."-<a>" ;
            }
          }
          ?>
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="index.php">&larr;Newer</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="index.php?page=<?=$totalPage;?>">Older &rarr;</a>
            </li4
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-6">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Topic </h5>
            <div class="card-body">
              
              <form action="" method="post" class="form-control"> 
                  
                  <input type="text" name="autor" placeholder="Auteur" class="form-control"><br><br> 
                  <input type="text" name="title" placeholder="Titre" class="form-control"><br><br>
                  
                  <textarea name="contains" id="" cols="30" rows="8" class="form-control" placeholder="type your text ... "></textarea><br><br>
                  <input type="submit" value ="Post&rarr;" class ="btn btn-primary"><br>
                   <div class="card-footer text-muted">
                    <?php if (isset($err))  { 
                        foreach ($err as $value) {
                           ?>
                            <ul>
                              <li class="alert-warning"><?=$value;?></li>
                            </ul>
                           <?php   
                         }
                    }
                   ?>
                  </div>
              </form>
              
            </div>

          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; @jukoo</p>
      </div>
      <!-- /.container -->
    </footer>

 

  </body>

</html>
