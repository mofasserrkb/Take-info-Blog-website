<?php

namespace App\classes;
use App\classes\Database;
class Blog
{
   public function addBlog($data)
   {
   $file_name=$_FILES['photo']['name'];
    $fileex=explode('.', $file_name);
    $fileex=end($fileex);
    $file_name=date('Ymdhis.').$fileex;
    
   $title=mysqli_real_escape_string(Database::dbcon(),$data['title']);
   $content=mysqli_real_escape_string(Database::dbcon(), $data['content']);
   $cat_id=mysqli_real_escape_string(Database::dbcon(), $data['cat_id']);
   $status= $data['status'];
   $name= $_SESSION['name'];
$sql="INSERT INTO blog (cat_id,title,content,photo,name,status)
    VALUES ('$cat_id','$title','$content','$file_name','$name','$status')";

   $result= mysqli_query(Database::dbcon(),$sql);
    if($result)
    {
        move_uploaded_file($_FILES['photo']['tmp_name'],'../uploads/'.$file_name);
        $insertMsg="Blog saved successfully";
        return $insertMsg;
    }
     else 
     {
        $insertMsg="Blog is not saved";
        return $insertMsg;
     }

   }

    public function updateBlog($data) {

   $title=mysqli_real_escape_string(Database::dbcon(),$data['title']);
   $content=mysqli_real_escape_string(Database::dbcon(), $data['content']);
   $cat_id=mysqli_real_escape_string(Database::dbcon(), $data['cat_id']);
   $status= $data['status'];
   $name= $_SESSION['name'];
   $id=$_POST['id'];
   if($_FILES['photo']['name']==Null)
   {
      $sql= "UPDATE blog SET cat_id='$cat_id',title='$title',
   content='$content',name='$name',status='$status' WHERE id='$id'";

   }
   else{
   $file_name=$_FILES['photo']['name'];
   $fileex=explode('.', $file_name);
   $fileex=end($fileex);
   $file_name=date('Ymdhis.').$fileex;
   $sql= "UPDATE blog SET cat_id='$cat_id',title='$title',content='$content',photo='$file_name',name='$name',status='$status' WHERE id='$id'";
    move_uploaded_file($_FILES['photo']['tmp_name'],'../uploads/'.$file_name);
 
   }

    $result= mysqli_query(Database::dbcon(),$sql);
    if($result)
    {
      

       $_SESSION['msge'] ="Updated successfully";  
        
            return     $_SESSION['msge'];
        header('Location:edit-blog.php?id='.$id);

    }
     else 
     {
       header('Location:edit-blog.php?='.$id);
     }
    }
   public function allBlog() {
$sql1= "SELECT blog.*, category.category_name FROM blog INNER JOIN category ON blog.cat_id = category.id ORDER BY id DESC";
    $result  = mysqli_query(Database::dbcon(),$sql1);
    return $result;
    }
     public function active($id) {
     $sql2="UPDATE blog SET status=1 WHERE id='$id'";
     $result  = mysqli_query(Database::dbcon(),$sql2);
    }
    public function inactive($id) {
     $sql3="UPDATE blog SET status=0 WHERE id='$id'";
     $result  = mysqli_query(Database::dbcon(),$sql3);
    }
    public function delete($id) {
     $sql4="DELETE FROM blog  WHERE id='$id'";
     $result  = mysqli_query(Database::dbcon(),$sql4);
    }
     public function selectRow($id='') {
        $sql5= "SELECT * FROM blog WHERE id='$id'";
    $result  = mysqli_query(Database::dbcon(),$sql5);
    return $result;
    }

    public function totalPages() {
        $sql1= "SELECT * FROM blog WHERE status='1'";
    $result  = mysqli_query(Database::dbcon(),$sql1);
    if(mysqli_num_rows($result)>0)
    {
      $totalRecords= mysqli_num_rows($result);
      $limit=4;
      $totalPages= ceil($totalRecords/$limit);
    }
    return $totalPages;
    }
     public function allActivePost($offset,$limit) {
               
    $sql1= "SELECT * FROM blog WHERE status='1' ORDER BY id DESC  LIMIT {$offset},{$limit}  ";
    $result  = mysqli_query(Database::dbcon(),$sql1);

    return $result;
    }
       public function searchPost($text,$offset) {
     $limit=2;           
    $sql1= "SELECT * FROM blog WHERE title LIKE '%$text%' OR content LIKE '%$text%' AND status='1' ORDER BY id DESC LIMIT {$offset},{$limit}  ";
    $result  = mysqli_query(Database::dbcon(),$sql1);

    return $result;
    }
       public function singlePost($id) {
    $sql5= "SELECT * FROM blog WHERE id='$id'";
    $result  = mysqli_query(Database::dbcon(),$sql5);
    return $result;

    }

    public function catPost($id,$offset) {
    $limit=2;
    $sql1= "SELECT * FROM blog WHERE status='1'AND cat_id='$id' ORDER BY id DESC LIMIT {$offset},{$limit} ";
    $result  = mysqli_query(Database::dbcon(),$sql1);

    return $result;

    
    }

    public function searchPage($text) {
$sql9= "SELECT * FROM blog WHERE title LIKE '%$text%' OR content LIKE '%$text%' AND status='1' ";
$result  = mysqli_query(Database::dbcon(),$sql9) or die(mysqli_error(Database::dbcon()));
  
    if(mysqli_num_rows($result)>0)
    {
      $totalRecords= mysqli_num_rows($result);
      $limit=2;
      $totalSearchPage= ceil($totalRecords/$limit);
    }
    else {
        $totalSearchPage=0;

    }
    return $totalSearchPage;
    }


    public function totalPage($id) {
        $sql1= "SELECT * FROM blog WHERE status='1' AND cat_id='$id'";
    $result  = mysqli_query(Database::dbcon(),$sql1);
    if(mysqli_num_rows($result)>0)
    {
      $totalRecords= mysqli_num_rows($result);
      $limit=2;
      $total= ceil($totalRecords/$limit);
    }
    return $total;
    }
       public function allActiveRecentPost() {
     $limit=3;           
    $sql1= "SELECT * FROM blog WHERE status='1' ORDER BY id DESC  LIMIT {$limit}  ";
    $result  = mysqli_query(Database::dbcon(),$sql1);

    return $result;
    }  
}

?>