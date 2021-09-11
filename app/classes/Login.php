<?php 
namespace App\classes;
use App\classes\Database;
class Login {
 
 public function loginCheck($data) {
 
 
 $username=$data['username'];
 $password=md5($data['password']);
 $sql="SELECT * FROM users WHERE username='$username'AND password='$password'";
  
  $result=mysqli_query(Database::dbcon(),$sql);
 
  if($result) {
   if (mysqli_num_rows($result)==1)
   {
     while  ($row=mysqli_fetch_assoc($result))
     {
     
      session_start();
        $_SESSION['username']=$row['username'];
        $_SESSION['user_id']=$row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['photo']=$row['photo'];
        $_SESSION['status']=$row['status'];

    
     
      header('Location:index.php');
     }
   }
   else {
   	  $loginError="username or password invalid!";
   	  return $loginError;
   }
   
  }
  else {
  	die();
  }
  
 } 
}

?>