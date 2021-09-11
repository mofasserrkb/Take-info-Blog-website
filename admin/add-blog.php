  <?php 
         require_once'header.php';
  ?>
  <?php 
        require_once '../vendor/autoload.php';
       
        $blog= new App\classes\Blog();
        $category= new App\classes\Category();
      $allActiveCategory=$category->allActiveCategory();
      
        if(isset($_POST['add-blog'])) {
        $msg=  $blog->addBlog($_POST);
        }
    
  ?>
   
    <div class="row">
          
           <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Blog Add Form
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
              <label for="cat_id" class="col-sm-3 col-form-label">Category 
              </label>
               <div class="col-sm-9">
          
             <select name="cat_id" id="cat_id" class="form-control" data-validation="required">
               <option value=""> select category </option>
               <?php while ($row=mysqli_fetch_assoc($allActiveCategory)) {
               ?>  
               <option value="<?= $row['id']?>"><?= $row['category_name']?> </option>
              <?php } ?>
             </select>
               </div>
       </div>
        <div class="form-group row">
              <label for="title" class="col-sm-3 col-form-label">
                Blog Title
              </label>
               <div class="col-sm-9">
            <input type="text" class="form-control" id="title" 
           name="title" placeholder="Blog title" data-validation="required">
               </div>
       </div>
          <div class="form-group row">
              <label for="content" class="col-sm-3 col-form-label">
              Content
              </label>
               <div class="col-sm-9">
             <textarea class="summernote" name="content" data-validation="required"  >
               
             </textarea>
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
   <button type="submit" class="btn btn-primary" name="add-blog">Save</button>
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