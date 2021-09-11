
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
             
        if(isset($_POST['update-user'])) {
        $msg=  $user->updateUser($_POST);
        }

        $id=$_GET['id'];
        $result= $user->selectRow($id);
        $row1=mysqli_fetch_assoc($result);
          
        
    
  ?>
   
    <div class="row">
          
           <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Update User Form
                          </header>
                          <div class="card-body">

      <?php 
       if (isset($msg)) {
      ?>
       <h5 class="text-center"><?= $msg ?></h5>
      <?php 
       }
      ?>
<form action="" method="POST" enctype="multipart/form-data">
    
        <div class="form-group row">
              <label for="name" class="col-sm-3 col-form-label">
               Name
              </label>
               <div class="col-sm-9">
            <input type="hidden" name="id" value="<?= $row1['id']?>">
            <input type="text" class="form-control" id="name" 
           name="name" value="<?= $row1['name']?>"  data-validation="required">
               </div>
       </div>
        <div class="form-group row">
              <label for="username" class="col-sm-3 col-form-label">
               User Name
              </label>
               <div class="col-sm-9">
            <input type="text" class="form-control" id="username" 
           name="username" value="<?= $row1['username']?>" data-validation="required">
               </div>
       </div>
        
         <div class="form-group row">
              <label for="photo" class="col-sm-3 col-form-label">
                Photo
              </label>
               <div class="col-sm-9">
      <input type="file"  id="photo" name="photo" >
      <img style="width:50px;" src="../uploads/<?= $row1['photo']?>">         
               </div>
       </div>                      
<fieldset class="form-group">
<div class="row">
              <legend class="col-form-label col-sm-3 pt-0">Status</legend>
   <div class="col-sm-9">
     <div class="form-check">
       <input class="form-check-input" type="radio" name="status" id=" Active" value="1"  <?= $row1['status']==1?'checked':''     ?> data-validation="required">
        <label class="form-check-label" for=" Active">
              Admin
       </label>
     </div>
                                          
     <div class="form-check disabled">
       <input class="form-check-input" type="radio" name="status" id="Inactive"  value="0"<?= $row1['status']==0?'checked':''     ?> data-validation="required">
       <label class="form-check-label" for="Inactive">
            Normal User
       </label>
     </div>
  </div>
</div>
</fieldset>
                              
<div class="form-group row">
  <div class="col-sm-10">
   <button type="submit" class="btn btn-primary" name="update-user">Update</button>
  </div>
</div>
</form>
</div>
</section>

</div>
</div>

<?php 

   require_once'footer.php';
?>