<?php
//have to include authenticate.php file on all secure page
include("authenticate.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pharmacy Request</title>
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
<?php
require('db.php');
?>

</head>
<body>

<div class="container-fluid mb-4">
                <div class="row">
                <div class="col-12"><h1>PHARMACY MANAGEMENT SYSTEM</h1></div>
        </div>
        <!-- name -->
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
        <h1 class="justify-content-center">Welcome to <b><?php echo $_SESSION['userRole']; ?> panel !</h1></b>
        <a class="btn"href="logout.php">Logout</a>
       
        <br>
<div class="container">
        <!-- 1st div -->
            <div class="row">
                <div class="col-3 order-first btn-group-vertical select">
               
                <a class="nav-link" href="req.php"> <button type="button" class="btn btn-secondary btn-lg">Make Requests
                </button></a>
                </div>

        <!-- 2st div -->            
            <div class="col bd-light ml-5">
   
        <?php
        
        if(isset($_REQUEST['name'])){
        $name = stripslashes($_REQUEST['name']);
	    $name = mysqli_real_escape_string($con,$name); 
        $address = stripslashes($_REQUEST['address']);
	    $address = mysqli_real_escape_string($con,$address); 
        $phone_num = stripslashes($_REQUEST['phone_num']);
	    $phone_num = mysqli_real_escape_string($con,$phone_num); 
        $info = stripslashes($_REQUEST['info']);
        $info = mysqli_real_escape_string($con,$info); 
      echo $address;

        
        $query = "INSERT INTO `pharmacy`(name, address, phone_num, info) 
        VALUES ('$name','$address','$phone_num','$info')";

        $result = mysqli_query($con, $query);
        if($result){
                echo "<div class='alert alert-success' role='alert'>
                <h3>Successfully added the medicine</h3>
                
        </div>";
        }else{
                echo "<div class='alert alert-danger' role='alert'>
                <h3>Medicine not added</h3>
        
                </div>";
        }

        }   
        ?>
        <form action="" method="POST" name="save" enctype="multipart/form-data" class="mt-2">
        <h3 class="text-center">Medicine Update Request</h3>
                <div class="form-group">
                <label>Pharmacy name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter pharmacy name">
                </div>
                
                <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter address">
                </div>

                <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-control" name="phone_num" placeholder="Enter phone number">
                </div>

                 <div class="form-group">
                <label>Medicine List</label>
                <textarea class="form-control" name="info" rows="20"></textarea>
                </div>

                <!-- <div class="form-group">
                <label>Medicine List</label>
                <input type="text" class="form-control" name="pharmainfo" placeholder="Enter pharmacy info">
                </div>

                <div class="form-group">
                <label>Company name</label>
                <input type="text" class="form-control" name="pharma_company" placeholder="Enter company name">
                </div>

                <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter price">
                </div> -->
<!--                 
                <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control" name="img" placeholder="Enter image name">
                </div> -->
                <!-- <div class="form-group">
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                Choose a file to upload: <input name="uploaded_file" type="file" />
                </div> -->

                <!-- <div class="form-group">
                <label>Medicine type</label>
                <select class="form-control" name="medtype">
                <option>give input</option>
                <option>non prescribed</option>
                <option>prescribe</option>
                </select>
                </div> -->

                <!-- <div class="form-group">
                <label>Disease</label>
                <input type="text" class="form-control" name="disease" placeholder="Enter disease">
                </div> -->

                 <input type="submit" class="btn btn-primary" name="save">
        </form>
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