<?php   require_once 'vendor/autoload.php'; 
$cat=new App\classes\Category();
$blog=new App\classes\Blog();
$category=$cat->allActiveCategory();
$post=$blog->allActiveRecentPost();
?>
  <!-- Side widgets-->
                <div class="col-lg-5">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header fw-bold bg-secondary text-white">Search</div>
                        <div class="card-body">
                            <form action="search.php?search=" method="GET">
                            <div class="input-group">
                                <input class="form-control" name="search" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="submit">Search!</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header fw-bold bg-secondary text-white">Categories</div>
                        <div class="card-body ">
                            <div class="row">
                                <?php while($row=mysqli_fetch_assoc($category))
                                { ?>
                    <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">

                    <li><a class= "btn btn-outline-danger fw-bold " href="category.php?id=<?= $row['id'] ?>"><?= $row['category_name']  ?></a></li> <br>
                    </ul>
                    </div>
                               <?php } ?> 
                            </div>
                        </div>
                    </div>
                    <!--Recent Post-->
                    <div class=" fw-bold p-2 bg-success text-white"> Recent Post</div>
                    <?php
  
       while($row1=mysqli_fetch_assoc($post))       
      
                {?>
                     
                     <div class="card mb-4">
                        
                                <a href="#!"><img class="card-img-top" src="uploads/<?= $row1['photo'] ?>" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">
                                  Posted on <?= date('d M Y',strtotime($row1['createtime']))?> by <?= $row1['name'] ?>        
                                    </div>
                                <h2 class="card-title h4"><?= $row1['title'] ?></h2>
                                  
                                    <a class="btn btn-primary" href="post1.php?id=<?= $row1['id']?>">Read more →</a>
                                </div>
                            </div>
                      <?php } ?>

            </div>
        </div>
    </div>