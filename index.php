  <?php                                
 require_once 'vendor/autoload.php';
$cat=new App\classes\Category();
$blog=new App\classes\Blog();
$category=$cat->allActiveCategory();
$totalPage=$blog->totalPages();
  $limit = 4;
        if(isset($_GET['page'])){
          $page = $_GET['page'];
            }else{
            $page = 1;
            }
        $offSET = ($page - 1) * $limit;
$post=$blog->allActivePost($offSET,$limit);



  ?>

  <?php   require_once 'header.php';?>
 


        <!-- Page content-->       
<!-- new-->
<div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-7">
                    <!-- Featured blog post-->
                    <?php
  
       while($row1=mysqli_fetch_assoc($post))       
      
                {?>

                    <div class="card mb-4 " >
                        <a href="#!"><img class="card-img-top" src="uploads/<?= $row1['photo'] ?>" alt="..." /></a>
                        <div class="card-body ">
                            <div class="small text-muted">
    Posted on <?= date('d M Y',strtotime($row1['createtime']))?> by <?= $row1['name'] ?> 
                           </div>
                    <h2 class="card-title"><?= $row1['title'] ?></h2>

                    <p class="card-text"><?= substr($row1['content'],0,400)?>..</p>
                <a class="btn btn-primary" href="post1.php?id=<?= $row1['id'] ?>">Read more →</a>
                            
                        </div>
                    </div>

            <?php  } ?>
                
                    <!-- Pagination-->



        <nav aria-label="Pagination">
        <hr class="my-0" />
        <ul class="pagination justify-content-center my-4">
      <?php 
         if($page>1) {
      echo ' <li class="page-item "><a class="page-link" href="index.php?page='.($page-1).'" >Prev</a></li> ';
                    }            
                         
                            for($i=1;$i<=$totalPage;$i++)           
                            {
                                
                         ?>
                <li class="<?=($i==$page)?'page-item active':''?>"  >
        <a class=" page-link" href="index.php?page=<?= $i ?>"><?= $i ?></a>
              </li>
                           
                           <?php    }    
                    
               if($totalPage>$page) {
             echo  ' <li class="page-item"><a class="page-link" href="index.php?page='.($page+1).'">Next</a></li>'; 
                     }
                               ?>
                           
                        </ul>
                    </nav>
                </div>
<?php   require_once 'sidebar.php';?>
<?php   require_once 'footer.php';?>