  <?php 
         require_once'header.php';
  
  ?>
    <?php 
        require_once '../vendor/autoload.php';
       
        $blog= new App\classes\Blog();
      
    $allPost=$blog->allBlog();
   
  ?>
     <div class="row">
                        <div class="col-sm-12">
                            <section class="card">
                                <header class="card-header">
                                  All Blog Post
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                                </header>
    <div class="card-body">
        <div class="adv-table">
            <table  class="display table table-bordered table-striped" id="dynamic-table">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Category Name</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Photo</th>
                        <th>Action</th>
                    
                    </tr>
                </thead>

                <tbody>
              <?php 
              $Sl=1;
             while($row=mysqli_fetch_assoc($allPost))
             { ?>
               <tr>
                <td> <?= $Sl   ?></td>
                <td> <?= $row['category_name']   ?></td>
                <td> <?= $row['title']   ?></td>
                <td> <?= $row['content']   ?></td>
                <td> <img style="width:50px;"src="../uploads/<?= $row['photo'] ?>"></td>
                 
                <td> <?php 
               if($row['status']==1)
               { ?>
         <a href="status.php?id=<?= $row['id'] ?>&blog=blog&inactive=inactive" class="btn btn-info btn-sm btn-block"> <i class="fa fa-arrow-down">Active </i>  </a>
         <?php   }
               else { ?>
         <a href="status.php?id=<?= $row['id'] ?>&blog=blog&active=active" class="btn btn-warning btn-sm btn-block "> <i class="fa fa-arrow-up">Iactive </i>  </a>
         
         <?php      } 
         ?>  </td>
    <td>
        
    <a href="edit-blog.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm btn-block "> <i class="fa fa-pencil-square-o">Edit </i>  </a>
    <a href="delete.php?id=<?= $row['id'] ?>&blog=blog&filename=<?= $row['photo']?>" class="btn btn-danger btn-sm btn-block"> <i class="fa fa-trash-o">Delete</i>  </a>
    </td>
    </tr>

            <?php
             $Sl++;
             }
              
             ?>                        
                </tbody>
               
                </table>
                </div>
                </div>
                </section>
                </div>
                </div>
<?php 

   require_once'footer.php';
?>
