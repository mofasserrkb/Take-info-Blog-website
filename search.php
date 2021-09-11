  <?php                                
 require_once 'vendor/autoload.php';
$cat=new App\classes\Category();
$blog=new App\classes\Blog();
use App\classes\Database;


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
       if(isset($_GET['search']))
     {
          $search=$_GET['search'];
           $limit = 2;
        if(isset($_GET['page'])){
          $page = $_GET['page'];
            }else{
            $page = 1;
            }
        $offSET = ($page - 1) * $limit;
         $totalPage=$blog->searchPage($search);
            $search1=$blog->searchPost($search,$offSET);
     
      
        if(mysqli_num_rows($search1)>0)
     {
       while($row3=mysqli_fetch_assoc($search1))       
      
                {?>

                    <div class="card mb-4 " >
                        <a href="#!"><img class="card-img-top" src="uploads/<?= $row3['photo'] ?>" alt="..." /></a>
                        <div class="card-body ">
                            <div class="small text-muted">
    Posted on <?= date('d M Y',strtotime($row3['createtime']))?> by <?= $row3['name'] ?> 
                           </div>
                    <h2 class="card-title"><?= $row3['title'] ?></h2>

                    <p class="card-text"><?= substr($row3['content'],0,400)?>..</p>
                <a class="btn btn-primary" href="post1.php?id=<?= $row3['id'] ?>">Read more →</a>
                            
                        </div>
                    </div>

            <?php  } ?>
  
 
      <?php       }

            else {
                echo '<h1> No result found </h1>';
            }
      ?>  
            <!-- Pagination-->



        <nav aria-label="Pagination">
        <hr class="my-0" />
        <ul class="pagination justify-content-center my-4">
      <?php 
       if($totalPage>0)
        {

         if($page>1) {
      echo ' <li class="page-item "><a class="page-link" href="search.php?search='.$search.'&page='.($page-1).'" >Prev</a></li> ';
                    }            
                         
                            for($i=1;$i<=$totalPage;$i++)           
                            {
                                
                         ?>
                <li class="<?=($i==$page)?'page-item active':''?>"  >
        <a class=" page-link" href="search.php?search=<?= $search?>&page=<?= $i ?>"><?= $i ?></a>
              </li>
                           
                           <?php    }    
                    
               if($totalPage>$page) {
             echo  ' <li class="page-item"><a class="page-link" href="search.php?search='.$search.'&page='.($page+1).'">Next</a></li>'; 
                     }
                               ?>
                           
                        </ul>
                    </nav>                
            
     <?php        }

                }
      ?>

             


                </div>
<?php   require_once 'sidebar.php';?>
<?php   require_once 'footer.php';?>