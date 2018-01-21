<?=$title = "Blog Post ";?><br><br>
<?php include"template/collecTemplate.php";?>
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
          <img class="img-fluid rounded" src="public/picture/<?=$currenTopics->avt;?>" alt="">

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
            <img class="d-flex mr-3 rounded-circle" src="public/picture/<?=$coms->avatar;?>"
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
