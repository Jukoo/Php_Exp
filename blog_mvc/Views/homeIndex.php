<?=$title = "Mon super Blog";?><br><br>
 <?php require "template/collecTemplate.php";?>

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-7 ">

          <h1 class="my-4">BlogSpace
            <small>Share your Idea ! </small>
          </h1>

          <!-- Blog Post -->
          <?php foreach ($topics as $value) :?> 
           
          <div class="card mb-4">
            <img class="card-img-top" src="public/picture/<?=$value->avt;?>" alt="Card image cap" >
            <div class="card-body">
              <h2 class="card-title"><?=$value->titre;?></h2>
              <p class="card-text"><?=substr($value->post,0 , 100) ;?>...</p>

              <a href="index-topics-<?=$value->ID;?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
            Posted At  :  <?=$value->Posted_at;?> By 
              <a href="#"> <?=$value->auteur;?></a>
            </div>
          </div>

           <?php endforeach;?>

          <!-- Pagination -->
          <?php 

          for ($i=1; $i<= $totalPage ; $i++) { 
            if ($i == $currentPage) { 
                echo  $i;
            }else { 
              echo "<a href=index-page-".$i.">".$i."-<a>" ;
            }
          }
          ?>
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="index.php">&larr;Newer</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="index-page-<?=$totalPage;?>">Older &rarr;</a>
            </li4
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-5">

 

          <!-- Categories Widget -->
          <div class="card my-4">
            <small class="card-header">Search</small>
           
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                   <ul class="list-unstyled mb-0 " align="center">
  
                  <?php if(isset($_GET['q']) && $_GET['q']!== null){  
                      foreach ($request as $q) :
                  ?>
                    <li>
                      <a href="index-topics-<?=$q->ID;?>"><?=$q->titre;?></a>
                    </li>
                <?php 
                    endforeach;
                  }else  { 

                    ?>
                       <li><?= isset($warn)?? $warn ; ?></li>
                    <?php
                    
                  }
                    ?>
                      
                  </u
                </div>
                
              </div>
            </div>
          </div>

       

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
 
    <!-- Footer -->
   <?php include'template/footer.php';?>
 

  </body>

</html>
