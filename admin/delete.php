<?php 
        require_once '../vendor/autoload.php';
       
        $category= new App\classes\Category();
        
        $blog= new App\classes\Blog();
    if(isset($_GET['cat']))
    {   
      
        $id=$_GET['id'];
          $category->delete($id);
        header('Location:manage-category.php');
      
    }

    if(isset($_GET['blog']))
    {   
      
        $id=$_GET['id'];
          $blog->delete($id);
         $filename=$_GET['filename'];
         unlink('../uploads/'.$filename); 
        header('Location:manage-blog.php');
      
    }
       
         

?>