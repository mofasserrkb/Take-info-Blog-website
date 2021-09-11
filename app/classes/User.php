<?php

namespace App\classes;
use App\classes\Database;
class User
{
 
  public function addUser($data)
   {

 
   $file_name=$_FILES['photo']['name'];
    $fileex=explode('.', $file_name);
    $fileex=end($fileex);
    $file_name=date('Ymdhis.').$fileex;
   $name=mysqli_real_escape_string(Database::dbcon(),$data['name']); 
   $username=mysqli_real_escape_string(Database::dbcon(),$data['username']); 
   $status= $data['status'];
   $password=md5($data['password']);
  
$sql="INSERT INTO users (name,username,password,photo,status)
    VALUES ('$name','$username','$password','$file_name','$status')";

   $result= mysqli_query(Database::dbcon(),$sql);
    if($result)
    {
        move_uploaded_file($_FILES['photo']['tmp_name'],'../uploads/'.$file_name);
        $insertMsg="User info saved successfully";
        return $insertMsg;
    }
     else 
     {
        $insertMsg="User info is not saved";
        return $insertMsg;
     }
 
   }
 
    public function updateUser($data) {

   $name=mysqli_real_escape_string(Database::dbcon(),$data['name']);
   $username=mysqli_real_escape_string(Database::dbcon(), $data['username']);
   
   $status= $data['status'];
   $id=$_POST['id'];
   if($_FILES['photo']['name']==Null)
   {
      $sql= "UPDATE users SET name='$name',
   username='$username',status='$status' WHERE id='$id'";

   }
   else{
   $file_name=$_FILES['photo']['name'];
   $fileex=explode('.', $file_name);
   $fileex=end($fileex);
   $file_name=date('Ymdhis.').$fileex;
   $sql= "UPDATE users SET name='$name', photo='$file_name',
   username='$username',status='$status' WHERE id='$id'";
    move_uploaded_file($_FILES['photo']['tmp_name'],'../uploads/'.$file_name);

   }

    $result= mysqli_query(Database::dbcon(),$sql);
    if($result)
    {
      

       $_SESSION['msge'] ="Updated successfully";  
        
            return     $_SESSION['msge'];
        header('Location:edit-user.php?id='.$id);

    }
     else 
     {
       header('Location:edit-user.php?='.$id);
     }
    }


   public function allUser() {
$sql1= "SELECT * FROM users ORDER BY id DESC";
    $result  = mysqli_query(Database::dbcon(),$sql1);
    return $result;
    }
  public function admin($id) {
     $sql2="UPDATE users SET status=1 WHERE id='$id'";
     $result  = mysqli_query(Database::dbcon(),$sql2);
    }
    public function normalUser($id) {
     $sql3="UPDATE users SET status=0 WHERE id='$id'";
     $result  = mysqli_query(Database::dbcon(),$sql3);
    }

    public function selectRow($id='') {
        $sql5= "SELECT * FROM users WHERE id='$id'";
    $result  = mysqli_query(Database::dbcon(),$sql5);
    return $result;
    }

}

?>