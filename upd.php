<?php
//have to include authenticate.php file on all secure page
include("authenticate.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>

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
        <a class="nav-link" href="admin.php"> <button type="button" class="btn btn-secondary btn-lg">Back to admin panels</button></a>
 <div class="container-fluid">
        <?php
include ('db.php');
$medName = $_POST['name'];
?>
<?php 
if(isset($_POST['update'])){

    $name = $_POST['name'];
    $strength = $_POST['strength'];
    $generic_name = $_POST['generic_name'];
    $pharmainfo = $_POST['pharmainfo'];
    $pharma_company = $_POST['pharma_company'];
    $price = $_POST['price'];
    $medtype = $_POST['medtype'];
    $med_desc = $_POST['med_desc'];
    $disease = $_POST['disease'];
 
   
        // $insertq = "UPDATE medicine SET name ='$name', strength='$strength', generic_name='$generic_name', pharmainfo ='$pharmainfo', pharma_company='$pharma_company',price='$price', medtype='$medtype',med_desc='$med_desc',disease='$disease'  WHERE name = $name";
        $i = "UPDATE `medicine` SET `name`='$name',`strength`= '$strength',`generic_name`='$generic_name',`pharmainfo`='$pharmainfo',`pharma_company`='$pharma_company',`price`=$price,`medtype`='$medtype',`med_desc`='$med_desc',`disease`='$disease' WHERE name = '$medName'";
        $result = mysqli_query($con, $i);
        
        if($result){
                echo "<div class='alert alert-success' role='alert'>
                <h3>Successfully updated medicine</h3>
                $medName
                $price
                <a href='display.php' class='btn'>Update medicine</a>
                </div>";
        }
    
}
?>
   <div class="container">     
        <div class="nav justify-content-center">
           <b> <h2>Edit medicine Info</h2> </b>        
        </div>
        <div>    
<?php
$q = " SELECT * FROM `medicine` WHERE name ='$medName' ";
$result = mysqli_query($con, $q);
$rows = mysqli_num_rows($result);

if($rows > 0){
    while($med = mysqli_fetch_array($result)){
   ?> <form action="upd.php" method="POST" >
   
   <tr >
    <td> Name </td><br>
    <td><input type="text" name="name" value="<?php echo $med['name'] ;?>"> </td><br>
    <td> Strength </td><br>
    <td><input type="text" name="strength" value="<?php echo $med['strength'] ;?>"> </td><br>
    <td> generic_name </td><br>
    <td><input type="text" name="generic_name" value="<?php echo $med['generic_name'] ;?>"> </td><br>
    <td>Pharma Info</td><br>
    <td><input type="text" name="pharmainfo" value="<?php echo $med['pharmainfo'] ;?>"> </td><br>
    <td> company </td><br>
    <td><input type="text" name="pharma_company" value="<?php echo $med['pharma_company'] ;?>"> </td><br>
    <td> price </td><br>
    <td><input type="text" name="price" value="<?php echo $med['price'] ;?>"> </td><br>
    <td> type </td><br>
    <td><input type="text" name="medtype" value="<?php echo $med['medtype'] ;?>"> </td><br>
    <td> desc </td><br>
    <td><input type="text" name="med_desc" value="<?php echo $med['med_desc'] ;?>"> </td><br>
    <td> dis </td><br>
    <td><input type="text" name="disease" value="<?php echo $med['disease'] ;?>"> </td><br>
    <br>

        <tr>
            <td><input type="hidden" name="name" value=<?php echo $med['name'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
        </tr>
      </form>
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