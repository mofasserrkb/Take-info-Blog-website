  <?php                                
 require_once 'vendor/autoload.php';
$cat=new App\classes\Category();
$blog=new App\classes\Blog();
$category=$cat->allActiveCategory();
$getId=$_GET['id'];
$singlePost=$blog->singlePost($getId);
$post=mysqli_fetch_assoc($singlePost);

  ?>

  <?php   require_once 'header.php';?>



        <!-- Page content-->       

<div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-7">
                    <!-- Featured blog post-->
           <h3 class="fst-italic"><?= $post['title'] ?></h3>
            <div class="text-muted fst-italic mb-2">Posted on <?= date('d M Y',strtotime($post['createtime']))?>by <?= $post['name'] ?> </div>
                         
                       
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="uploads/<?= $post['photo'] ?>" alt="..." /></figure>

                   <section class="mb-5">
                            <p class=" mb-4"><?= $post['content'] ?></p>
                           
                            
                        </section>
                   

                
                    <!-- Pagination-->



                </div>
<?php   require_once 'sidebar.php';?>
<?php   require_once 'footer.php';?>