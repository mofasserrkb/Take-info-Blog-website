<?php   require_once 'vendor/autoload.php'; 
$cat=new App\classes\Category();

$category=$cat->allActiveCategory();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Take Info Blog Website</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="Favicon/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="cssFile/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand  btn btn-outline-info fw-bolder" href="index.php">Take Info </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                     
        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Categories
      </a>
      <div class="dropdown-menu">
        <?php while($row=mysqli_fetch_assoc($category))
                                { ?>  
        <a class="dropdown-item" href="category.php?id=<?= $row['id'] ?>"><?= $row['category_name']  ?></a>
       <?php  }  ?>
      </div>
    </li>
   
 
                </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center ">
                    <h1 class="fw-bolder">Take Info Blog Website</h1>
                  <!--  <p class="lead mb-0">A Bootstrap 5 starter layout </p>
                   -->
                </div>
            </div>
        </header>