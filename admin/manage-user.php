<?php 
         require_once'header.php';
  
  ?>


<?php 
if($_SESSION['status'] == 0 ){
  header("Location: index.php");
}
?>



  
    <?php 
        require_once '../vendor/autoload.php';
       
        $user= new App\classes\User();
      
    $allPost=$user->allUser();
   
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
                        <th>Name</th>
                        <th>User Name</th>
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
                <td> <?= $Sl ?></td>
                <td> <?= $row['name']   ?></td>
                <td> <?= $row['username']   ?></td>
                <td> <img style="width:50px;"src="../uploads/<?= $row['photo'] ?>"></td>
                 
                <td> <?php 
               if($row['status']==1)
               { ?>
         <a href="status.php?id=<?= $row['id'] ?>&user=user&normalUser=normalUser" class="btn btn-info btn-sm btn-block"> <i class="fa fa-arrow-down">Admin </i>  </a>
         <?php   }
               else { ?>
         <a href="status.php?id=<?= $row['id'] ?>&user=user&admin=admin" class="btn btn-warning btn-sm btn-block "> <i class="fa fa-arrow-up">Normal User</i>  </a>
         
         <?php      } 
         ?>  </td>

                <td>
        
    <a href="edit-user.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm btn-block "> <i class="fa fa-pencil-square-o">Edit </i>  </a>
    <a href="delete.php?id=<?= $row['id'] ?>&blog=blog" class="btn btn-danger btn-sm btn-block"> <i class="fa fa-trash-o">Delete</i>  </a>
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
