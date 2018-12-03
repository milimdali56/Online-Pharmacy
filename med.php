<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Medicine</title>

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
                       <li><a href="home.php"action ="search.php" method="POST">Home</a></li>
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
include ('db.php');
$medName = $_POST['medName'];
?>
   <div class="container">     
        <div class="nav justify-content-center">
           <b> <h2>Medicine Info</h2>     </b>        
        </div>
        <div>

<?php
$q = " SELECT * FROM `medicine` WHERE name ='$medName' ";
$result = mysqli_query($con, $q);
$rows = mysqli_num_rows($result);

if($rows > 0){
    while($med = mysqli_fetch_array($result)){
   ?>
            <h3><?php echo $med['name'] ;?></h3>      
            <b><p class="genname"><?php echo $med['generic_name'] ;?></p></b>
            <p><?php echo $med['pharma_company'] ;?></p>
            <p><?php echo $med['strength'] ;?></p>
            <b><h4 class="price">Price per pack</h4></b>
            <p><?php echo $med['price'] ;?> tk</p>
            <form action ="alterMed.php" method="POST"> 
                 <input type="hidden" name="am" value= "<?php echo $med['generic_name']; ?>">
                <input type="submit"  class="btn btn-secondary btn-lg alter" value="Simmilar Medicines">
                </form>
        </div>
        <br>
        <div class="description">
                <div class="jumbotron">
                        <h1 class="display-8">Dosage & Administration</h1>
                        <hr class="my-4">
                        <p>It is a <b><?php echo $med['medtype'] ;?></b> medicine</p>
                        <p>Disease :<b> <?php echo $med['disease'] ;?></b></p>
                        <p><?php echo $med['med_desc'] ;?></p>
                        <p><?php echo $med['pharmainfo'] ;?></p>
                       </div> 
        </div>
               <?php
    }
}
               ?>

                
                
        
</div>
              <footer>
                      <hr>
                   <div class="footer">
                           footer
                   </div>
              </footer>  
</body>
</html>