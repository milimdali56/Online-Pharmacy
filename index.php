<!DOCTYPE html>
<html>
<head>  
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Welcome to PMS</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/smstyle.css" />
</head>
<body>
<div class="container-fluid">
          <div class="container-fluid mb-4">
                <div class="row">
                <div class="col-12"><h1>PHARMACY MANAGEMENT SYSTEM</h1></div>
        </div>
        <!-- name -->
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> not Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        <div class="container">
               <div class="col-sm ">
                        <form action ="search.php" method="POST" class="my-lg-0 col-12">
                        <input class="form-control badge-pill col-6 float-left mr-2" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn my-2 my-sm-0 float-right" type="submit">Search</button>
                    </form>
                </div>
         </div> 
         <!-- search portion -->
         <div class="navbar mb-4">
                <ul class="nav text-center justify-content-center">
                       <li><a href="index.php"action ="search.php" method="POST">Home</a></li>
                       <li><a href="products.php">Drugs</a>
                           <ul>
                                <li><a href=#>Disease</a></li>
                                <li><a href=#>Generics</a></li>
                           </ul>
                       </li>
                       <li><a href="pharmacy.php">Pharmacies</a></li>
                       <li><a href="pharmacom.php">Pharamaceuticals</a></li>
                </ul>
               
        </div>
        <!--  -->
<?php
include('db.php');

$q1 = "SELECT count(*) as mednum FROM `medicine`";
$res = mysqli_query($con,$q1);
$val = mysqli_fetch_assoc($res);
$row = $val['mednum'];

$q2 = "SELECT count(*) as pharmanum FROM `pharmacy`";
$res2 = mysqli_query($con,$q2);
$val2 = mysqli_fetch_assoc($res2);
$row2 = $val2['pharmanum'];

$q3 = "SELECT count(*) as comnum FROM `pharmaceuticals`";
$res3 = mysqli_query($con,$q3);
$val3 = mysqli_fetch_assoc($res3);
$row3 = $val3['mednum'];

?>
<div class="count">
        <div class="container">
                <div class="row">
                        <div class="col mb-4">
                                <div class="float-left"> <img src="image/itaminas.jpg" alt="" class="rounded-circle" height="100px" width="100px"></div>
                                <div class="text-center"> <h4 >Number of Medicines</h4>
                                <h4 > <?php echo $row; ?> <h4>
                                </div>
                        </div>
                        <div class="col mb-4">
                                <div class="float-left"> 
                                <img src="image/images.png" alt="" class="rounded-circle" height="100px" width="100px"> 
                                </div>
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
                                <h4><h4 > <?php echo $row2; ?> <h4> <h4>
                                </div>
                        </div>
                        <div class="col mb-2">
                                <div class="float-left"> <img src="image/pharma1.png" alt="" class="rounded-circle" height="100px" width="100px">    </div>                             
                                <div class="text-center"> 
                                <h4>Pharamaceuticals</h4>
                                <h4><h4 > <?php echo $row3; ?> <h4> <h4>
                                </div>
                        </div>
                </div>
        </div>
</div>

<!-- about section -->
	<div class="px-lg-4 px-3">
	        <div class="py-lg-5 py-3">
		        <div class="row">
                                <div class="col-lg-6 p-0">
					<img src="image/pharma2.png" alt="" class="img-fluid">
				</div>
			        <div class="col-lg-6">
                                        <h3 class="text-left mb-lg-5 mb-3">About Us</h3>
                                        <hr>
						<p class="my-xl-4 my-lg-3 my-md-4 my-3">
                                                        brief about the site
                                                </p>
                                <a href="products.php" class="btn btn-sm animated-button gibson-three mt-4">See what we offer</a>
                        </div>
                </div>
        </div>

<div class="card text-center">
        <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">If you want to increse your pharmacy business register today.</p>
        </div>

        <div class=" reg card-footer text-muted ">
        <a href="registration.php" class="btn"> REGISTER NOW </a> or
        <a href="login.php" class="btn">Login</a>
        </div>
</div>

<footer class=" container-fluid color-light">
        <hr>
    <div class="footer">
        footer
    </div>
</footer> 
</body>
</html>

