  <?php                                
 require_once 'vendor/autoload.php';
$cat=new App\classes\Category();
$blog=new App\classes\Blog();
$category=$cat->allActiveCategory();
use App\classes\Database;
    $getId=$_GET['id'];
 $totalPage=$blog->totalPage($getId);
  $limit = 2;
  if(isset($_GET['page'])){
          $page = $_GET['page'];
            }
            else{
            $page = 1;
            }
  $offSET = ($page - 1) * $limit;
   
    $catpost=$blog->catPost($getId,$offSET);
 
  ?>

  <?php   require_once 'header.php';?>
 


        <!-- Page content-->       
<div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-7">
                    <!-- Featured blog post-->
            <?php
         
       while($row2=mysqli_fetch_assoc($catpost))       
      
                {?>

                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="uploads/<?= $row2['photo'] ?>" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">
    Posted on <?= date('d M Y',strtotime($row2['createtime']))?> by <?= $row2['name'] ?> 
                           </div>
                    <h2 class="card-title"><?= $row2['title'] ?></h2>

                    <p class="card-text"><?= substr($row2['content'],0,400)?>..</p>
                <a class="btn btn-primary" href="post1.php?id=<?= $row2['id'] ?>">Read more →</a>
                            
                        </div>
                    </div>

            <?php  } ?>
        <!-- pagination -->
        <nav aria-label="Pagination">
        <hr class="my-0" />
        <ul class="pagination justify-content-center my-4">
      <?php 
       if($page>1) {
      echo ' <li class="page-item "><a class="page-link" href="category.php?
      id='.$getId .'&page='.($page-1).'" >Prev</a></li> ';
                    }       
                         
                            for($i=1;$i<=$totalPage;$i++)           
                            {
   
                         ?>
                <li class="<?=($i==$page)?'page-item active':''?>"  >
        <a class=" page-link" href="category.php?id=<?= $getId?>&page=<?= $i ?>"><?= $i ?></a>
              </li>
                           
                           <?php    }    
                    
              if($totalPage>$page) {
             echo  ' <li class="page-item"><a class="page-link" href="category.php?id='.$getId .'&page='.($page+1).'">Next</a></li>'; 
                     } 
                               ?>
                           
                        </ul>
                    </nav>
                
    </div>
<?php   require_once 'sidebar.php';?>
<?php   require_once 'footer.php';?>