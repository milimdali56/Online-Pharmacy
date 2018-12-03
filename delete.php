<?php
//including the database connection file

include("db.php");
 
//getting id of the data from url
$name = $_POST['name'];
 
//deleting the row from table
$q = "DELETE FROM `medicine` WHERE name = '$name'";
$r = mysqli_query($con,$q);
 
//redirecting to the display page (index.php in our case)
header("Location:display.php");
?>