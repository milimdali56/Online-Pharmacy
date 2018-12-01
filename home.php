<!DOCTYPE html>
<html>
<head>

<title>Home</title>

 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/smstyle.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <div class="container-fluid">
                <div class="row">
                <div class="col-12"><h1>PHARMACY MANAGEMENT SYSTEM</h1></div>
        </div>
        <div class="container">
               <div class="col-sm">
                        <form action ="search.php" method="POST" class="btn form-inline my-lg-0 col-10">
                        <input class="form-control badge-pill" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <img src="image/av0cc3f7b41cb8510e35c.png" alt="" class="rounded-circle" height="70px" width="70px"> 
                        <img src="image/19415-200.png" alt="" class="rounded-circle" height="60px" width="60px">
                </div>
         </div> 
        <div class="navbar mb-4">
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
<?php
include('db.php');

$q1 = "SELECT count(*) as mednum FROM `medicine`";
$res = mysqli_query($con,$q1);
$val = mysqli_fetch_assoc($res);
$row = $val['mednum'];
?>
        <div class="container">
                <div class="row">
                        <div class="col mb-4">
                               <div class="float-left"> <img src="image/itaminas.jpg" alt="" class="rounded-circle" height="100px" width="100px"></div>
                               <div class="text-center"> <h4 >Number of Medicines</h4>
                               <h4 > <?php echo $row; ?> <h4>
                                </div>
                        </div>
                        <div class="col mb-4">
                        <div class="float-left"> <img src="image/images.png" alt="" class="rounded-circle" height="100px" width="100px"> </div>
                        <div class="text-center"> 
                                <h4>Generics</h4>  
                                <h4> <h4>
                        </div>
                       
                        </div>
                        <div class="w-100"></div>
                        <div class="col mb-2">
                        <div class="float-left"> <img src="image/1.jpg" alt="" class="rounded-circle" height="100px" width="100px"> </div>
                        <div class="text-center"> 
                        <h4>Pharmacies</h4>  
                        <h4> <h4>
                        </div>
                        </div>
                        <div class="col mb-2">
                        <div class="float-left"> <img src="image/pharma1.png" alt="" class="rounded-circle" height="100px" width="100px">    </div>                             
                        <div class="text-center"> 
                        <h4>Pharamaceuticals</h4>
                        <h4> <h4>
                         </div>
                        </div>
                </div>
        </div>
      
        <div>
              <footer>
                      <hr>
                   <div class="footer">
                           footer
                   </div>
              </footer>
</div>  
</body>
</html>

