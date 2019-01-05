<?php
//have to include authenticate.php file on all secure page
include("authenticate.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <b><?php echo $_SESSION['username']; ?>!</p></b>
<h1>You have logged in</h1>
<p><a href="home.html">Home</a></p>
<p><a href="products.php">Products</a></p>
<p><a href="med.html">Medicine</a></p>
<p><a href="alterMed.html">Alternatives</a></p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="admin.php">admin</a>
<a href="logout.php">Logout</a>
</div>
</body>
</html>