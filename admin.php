<?php
//have to include authenticate.php file on all secure page
include("authenticate.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/smstyle.css" />

</head>

<body>

<div class="container">
                <div class="row">
                <div class="col-12"><h1>PHARMACY MANAGEMENT SYSTEM</h1></div>
        </div>
        <div class="container-fluid">
               <div class="col-sm">
               <form action ="search.php" method="POST" class="btn form-inline my-lg-0 col-10">
                        <input class="form-control badge-pill" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <a href="logout.php"><img src="image/av0cc3f7b41cb8510e35c.png" alt="" class="rounded-circle" height="70px" width="70px"> </a>
                        <img src="image/19415-200.png" alt="" class="rounded-circle" height="60px" width="60px">
                </div>
        </div> 
        <div class="navbar mb-4" style =" backgroung-color:red">
                <ul class="nav text-center justify-content-center">
                       <li><a href="home.php">Home</a></li>
                       <li><a href="products.php">Drugs</a>
                           <ul>
                                <li><a href=#>Disease</a></li>
                                <li><a href=#>Generics</a></li>
                           </ul>
                       </li>
                       <li><a href=#>Pharmacies</a></li>
                       <li><a href=#>Pharamaceuticals</a></li>
                </ul>
               
</div>
        <br>
        <div class="container">
        <!-- 1st div -->
            <div class="row">
                <div class="col-3 order-first btn-group-vertical select">
                <a class="nav-link" href="add.php"> <button type="button" class="btn btn-secondary btn-lg">Add products
                </button></a>
                <a class="nav-link" href="req.php"> <button type="button" class="btn btn-secondary btn-lg">Check Requests
                </button></a>
                <a class="nav-link" href="admin.php"> <button type="button" class="btn btn-secondary btn-lg">Admin Panel
                </button></a>
                </div>

        <!-- 2st div -->            
            <div class="col bd-light ml-5">
                <div class="text-center bg">
                        <h2>Welcome to Admin Pannel</h2>
                </div>
            </div>
        </div>     


                <footer>
                      <hr>
                   <div class="footer">
                           footer
                   </div>
                </footer>  

</body>
</html>