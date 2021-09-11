
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
               
        if(isset($_POST['add-user'])) {
        $msg=  $user->addUser($_POST);
        }
    
  ?>
   
    <div class="row">
          
           <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Add User Form
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
            <input type="text" class="form-control" id="name" 
           name="name" placeholder="Name" data-validation="required">
               </div>
       </div>
        <div class="form-group row">
              <label for="username" class="col-sm-3 col-form-label">
               User Name
              </label>
               <div class="col-sm-9">
            <input type="text" class="form-control" id="username" 
           name="username" placeholder="User Name" data-validation="required">
               </div>
       </div>
          <div class="form-group row">
              <label for="password" class="col-sm-3 col-form-label">
               Password
              </label>
               <div class="col-sm-9">
            <input type="password" class="form-control" id="password" 
           name="password" placeholder="Password" data-validation="required">
               </div>
       </div> 
         <div class="form-group row">
              <label for="photo" class="col-sm-3 col-form-label">
                Photo
              </label>
               <div class="col-sm-9">
      <input type="file"  id="photo" name="photo" data-validation="required">
               </div>
       </div>                      
<fieldset class="form-group">
<div class="row">
              <legend class="col-form-label col-sm-3 pt-0">Status</legend>
   <div class="col-sm-9">
     <div class="form-check">
       <input class="form-check-input" type="radio" name="status" id=" Active" value="1" data-validation="required">
        <label class="form-check-label" for=" Active">
              Active
       </label>
     </div>
                                          
     <div class="form-check disabled">
       <input class="form-check-input" type="radio" name="status" id="Inactive" value="0" data-validation="required">
       <label class="form-check-label" for="Inactive">
            Inactive
       </label>
     </div>
  </div>
</div>
</fieldset>
                              
<div class="form-group row">
  <div class="col-sm-10">
   <button type="submit" class="btn btn-primary" name="add-user">Save</button>
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