<!-- <?php
include("authenticate.php");
?> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products</title>
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
        <div class="container">
               <div class="col-sm">
                        <form class="btn form-inline my-lg-0 col-10">
                        <input class="form-control badge-pill" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <img src="image/av0cc3f7b41cb8510e35c.png" alt="" class="rounded-circle" height="70px" width="70px"> 
                        <img src="image/19415-200.png" alt="" class="rounded-circle" height="60px" width="60px">
                </div>
         </div> 
        <div class="">
                <ul class="nav justify-content-center">
                        <li class="nav-item">
                                <a class="nav-link active" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Drugs</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Pharamaceuticals</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">News</a>
                        </li>
                </ul>
           <hr>
        </div>
        <div class="row">
<?php

$con = mysqli_connect("localhost","root","Madwoman@8");

// include("authenticate.php");

mysqli_select_db($con,'reg');

// if($con){
//     echo "done";
// }else{
//     echo "not con";
// }

$query = " SELECT `medID`, `name`, `strength`, `generic_name`, `available_quantity`, `pharma_company`, `price`, `img` FROM `medicine` order by medId asc";

$result = mysqli_query($con, $query);

$rows = mysqli_num_rows($result);

if($rows > 0){
    while($med = mysqli_fetch_array($result)){
   ?>
    <div class= "col-lg-3 col-md-3 col-sm-12 mb-2">
         <form>
             <div class="card ">
                 <h4 class="card-title"><?php echo $med['name'] ;?></h4>

            <div class="card-body">
                <img class="medimg mb-2"src ="<?php echo $med['img']; ?>" alt="">
                <h6> <?php echo $med['pharma_company'] ;?></h6>                            
                <h4> <img src ="tk.png" alt="" height="15px" width="15px" > <?php echo $med['price'] ;?></h4>            
            </div>
            <input type="text" class="form-control mb-2" placeholder="Quantity">
            <div class="btn-group d-flex">
                <button class="btn btn-secondary flex-fill">Add to bag</button>
                <button class="btn btn-dark flex-fill">
                <a href="med.html" >Buy Now</a>
                        </button>                
            </div>
             </div>
    </div>

<?php
    }
}

?>
</div> 
<!-- product display end -->

                <footer>
                      <hr>
                   <div class="footer">
                           footer
                   </div>
                </footer>  
</body>
</html>