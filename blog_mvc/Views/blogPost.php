
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post</title>

    <!-- Bootstrap core CSS -->
    <base href="/blog_mvc/">
    <link href="Style/style.min.css" rel="stylesheet">
  

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
              <a class="nav-link" href="index.php">Blogs
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
             
        <!-- Post Content Column -->
        <div class="col-md-8">
              
             
          <!-- Title -->
          <h1 class="md-4"><?=$currenTopics->titre;?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#"><?=$currenTopics->auteur;?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?=$currenTopics->Posted_at;?></p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="picture/<?=$currenTopics->avt;?>" alt="">

          <hr>

          <!-- Post Content -->
          <small class="lead"><?=$currenTopics->post;?></small><br><br>
      
          <div class="card md-6">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form method ="POST" >
                <div class="form-group" >
                  <input type="text" name="pseudo" placeholder=" your name !" class="form-control"> <br>

                  <textarea class="form-control"  name ="commentary" rows="3" placeholder=" your comment ! "></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Comment"></input>
              </form>
            </div>
                <?php  if (isset($warning)) {?>
              <span class="alert alert-danger"><?=isset($warning)?$warning:null;?></span>
                <?php }?>
          </div>

          <!-- Single Comment -->
       
         
        
      <!-- /.row -->
      </div>
         <div class="col-md-4">
           <?php foreach($relatedCom as $coms) { ?>
           
         
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="picture/<?=$coms->avatar;?>"
            height ="50px" width="50px" alt="">
            <div class="media-body">
              <h5 class="mt-0 text-muted"><?=$coms->author ;?></h5>
             <small><?=$coms->comment;?></small> 
            </div>
          </div>
            <hr>
          <?php }?>
          </div>

    </div>
    <!-- /.container -->
  </div>
    <!-- Footer -->
  <?php include("template/footer.php");?>

  </body>

</html>
