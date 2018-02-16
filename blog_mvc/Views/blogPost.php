<?=$title = "Blog Post ";?><br><br>

<?php include"template/collecTemplate.php";?>
    <!-- Page Content -->
  

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
          <div>
            <a href="index-topics-<?=$currenTopics->ID;?>" class="btn btn-primary "><small>Likes(15)</smlall></a>
           <a href="index-topics-<?=$currenTopics->ID;?>" class="btn btn-danger "><small>Dislikes(3)</small></a><br><br>

          </div>
          
      
          <div class="card md-4">
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
         <div class="col-xs-6">
          <h2 class="mt-0 text-muted"> Comments </h2><br>
           <?php foreach($relatedCom as $coms) { ?>
           
         
          <div class="media mb-8">
            <img class="d-flex mr-3 rounded-circle" src="public/picture/<?=$coms->avatar;?>"
            height ="50px" width="50px" alt="">
            <div class="media-body">
              <h5 class="mt-0 text-muted"><?=$coms->author ;?></h5>
             <small><?=$coms->comment;?></small> 
            </div>
          </div>
            <hr>
          <?php }?>
         <!-- <div class="card my-4">
            <small class="card-header">Search</small>
           
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                 <ul class="list-unstyled mb-0 " align="center">
  
                  <?php if(isset($_GET['q']) && $_GET['q']!== null){  

                    
                  ?>
                    <li>
                      <a href="index-topics-<?=$request->ID;?>"><?=$request->titre;?></a>
                    </li>
                <?php 
       
                  }else  { 

                    ?>
                       <li><?= isset($warn)? $warn :null ;?></li>
                    <?php
                    
                  }
                    ?>
                      
                  </ul>-->
                </div>
                </div>
                
              </div>
            </div>
          </div>
          </div>


    </div>

    <!-- /.container -->
  </div>
    <!-- Footer -->
  <?php include("template/footer.php");?>

  </body>

</html>
