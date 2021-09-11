  <?php 
         require_once'header.php';
  
  ?>
    <?php 
        require_once '../vendor/autoload.php';
       
        $category= new App\classes\Category();
      
    $catResult=$category->allCategory();
   
  ?>
     <div class="row">
                        <div class="col-sm-12">
                            <section class="card">
                                <header class="card-header">
                                    Dynamic Table
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
                        <th>Status</th>
                        <th>Action</th>
                    
                    </tr>
                </thead>

                <tbody>
              <?php 
              $Sl=1;
             while($row=mysqli_fetch_assoc($catResult))
             { ?>
               <tr>
                <td> <?= $Sl   ?></td>
                <td> <?= $row['category_name']   ?></td>
                <td> <?= $row['status']==1?'Active':'Inactive' ?></td>
                <td>
         <?php 
               if($row['status']==1)
               { ?>
         <a href="status.php?id=<?= $row['id'] ?>&cat=category&inactive=inactive" class="btn btn-info btn-sm "> <i class="fa fa-arrow-down">Inactive </i>  </a>
         <?php   }
               else { ?>
         <a href="status.php?id=<?= $row['id'] ?>&cat=category&active=active" class="btn btn-warning btn-sm "> <i class="fa fa-arrow-up">Active </i>  </a>
         
         <?php      } 
         ?>  
    <a href="edit-category.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm "> <i class="fa fa-pencil-square-o">Edit </i>  </a>
    <a href="delete.php?id=<?= $row['id'] ?>&cat=category" class="btn btn-danger btn-sm "> <i class="fa fa-trash-o">Delete</i>  </a>
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