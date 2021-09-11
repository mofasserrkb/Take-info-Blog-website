<?php 
  require_once '../vendor/autoload.php';
       
 $category= new App\classes\Category();
 $blog= new App\classes\Blog();
 $user= new App\classes\User();
 if(isset($_GET['active'])&&isset($_GET['cat']))
    {   
      
        $id=$_GET['id'];
          $category->active($id);
          header('Location:manage-category.php');

      
    }
      if(isset($_GET['inactive'])&&isset($_GET['cat']))
    {
            
        $id=$_GET['id'];
        $category->inactive($id);
        header('Location:manage-category.php');

       
    }
     if(isset($_GET['active'])&&isset($_GET['blog']))
    {   
      
          $id=$_GET['id'];
          $blog->active($id);
          header('Location:manage-blog.php');

      
    }
      if(isset($_GET['inactive'])&&isset($_GET['blog']))
    {
            
        $id=$_GET['id'];
        $blog->inactive($id);
        header('Location:manage-blog.php');

       
    }
if(isset($_GET['normalUser'])&&isset($_GET['user']))
    {   
      
          $id=$_GET['id'];
          $user->normalUser($id);
          header('Location:manage-user.php');

      
    }
      if(isset($_GET['admin'])&&isset($_GET['user']))
    {
            
        $id=$_GET['id'];
        $user->admin($id);
        header('Location:manage-user.php');

       
    }




?>