<?php
include("authenticate.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
user is 
<?php 
include('db.php');

$user = $_SESSION['username']; 
 echo $user; 
$query = "SELECT * FROM `user` WHERE username = '$user'";
$result = mysqli_query($con, $query);

$rows = mysqli_num_rows($result);

if($rows > 0){
    while($u = mysqli_fetch_array($result)){
    $role =  $u['userRole'] ;
    $_SESSION['userRole']=$role;
    $_SESSION['username']=$user;
        // echo $role;
       if($role=='admin'){
        header('Location:admin.php');
       }else{
        header('Location:req.php');
       }
    
    }
}
?>
<br>

</body>
</html>