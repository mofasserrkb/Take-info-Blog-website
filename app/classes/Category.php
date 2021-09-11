<?php

namespace App\classes;
use App\classes\Database;
class Category {
	public function addCategory($data) {
  
    $category_name=$data['category_name'];
    $status= $data['status'];
      $sql= "INSERT INTO category (category_name,status)
   VALUES (' $category_name','$status')";
    $result= mysqli_query(Database::dbcon(),$sql);
    if($result)
    {
        $insertMsg="Category saved successfully";
        return $insertMsg;
    }
     else 
     {
        $insertMsg="Category is not saved";
        return $insertMsg;
     }
	}
   
    public function updateCategory($data) {
  
    $category_name=$data['category_name'];
    $status= $data['status'];
    $id=$data['id'];
  $sql= "UPDATE category SET category_name=' $category_name',
  status='$status' WHERE id='$id'";
    $result= mysqli_query(Database::dbcon(),$sql);
    if($result)
    {
      

       $_SESSION['msge'] ="Updated successfully";  
        
            return     $_SESSION['msge'];
        header('Location:edit-category.php?id='.$id);

    }
     else 
     {
       header('Location:edit-category.php?='.$id);
     }
    }
    
    public function allCategory() {
        $sql1= "SELECT * FROM category";
    $result  = mysqli_query(Database::dbcon(),$sql1);
    return $result;
    }
     public function selectRow($id='') {
        $sql5= "SELECT * FROM category WHERE id='$id'";
    $result  = mysqli_query(Database::dbcon(),$sql5);
    return $result;
    }
    public function active($id) {
     $sql2="UPDATE category SET status=1 WHERE id='$id'";
     $result  = mysqli_query(Database::dbcon(),$sql2);
    }
    public function inactive($id) {
     $sql3="UPDATE category SET status=0 WHERE id='$id'";
     $result  = mysqli_query(Database::dbcon(),$sql3);
    }
    public function delete($id) {
     $sql4="DELETE FROM category  WHERE id='$id'";
     $result  = mysqli_query(Database::dbcon(),$sql4);
    }
     public function allActiveCategory() {
        $sql1= "SELECT * FROM category WHERE status='1'";
    $result  = mysqli_query(Database::dbcon(),$sql1);
    return $result;
    }
  
    public function catPost($id) {
    $sql1= "SELECT * FROM blog WHERE status='1'  AND cat_id='$id' ";
    $result  = mysqli_query(Database::dbcon(),$sql1);

    return $result;
    }
    
}


?>