<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Display</title>
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

      
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>

 <div class="container">
 <div class="col-lg-12">
  <br><br>
  <h1 class="text-warning text-center" > Display Table Data </h1>
  <br>
  <table  id="tabledata" class=" table table-striped table-hover table-bordered">
   
   <tr class="bg-dark text-white text-center">
    
    <th> Id </th>
    <th> Name </th>
    <th> strength </th>
    <th> generic_name </th>
    <th> quantity </th>
    <th> company </th>
    <th> price </th>
    <th> img </th>
    <th> type </th>
    <th> desc </th>
    <th> dis </th>

   </tr >

 <?php

    include('db.php');

    $q = "select * from  medicine";

   $query = mysqli_query($con,$q);

   while($res = mysqli_fetch_array($query)){
 ?>
   <tr class="text-center">
    <td> <?php echo $res['id'];  ?> </td>
    <td> <?php echo $res['name'];  ?> </td>
    <td> <?php echo $res['strength'];  ?> </td>
    <td> <?php echo $res['generic_name'];  ?> </td>
    <td> <?php echo $res['available_quantity'];  ?> </td>
    <td> <?php echo $res['pharma_company'];  ?> </td>
    <td> <?php echo $res['price'];  ?> </td>
    <td> <?php echo $res['img'];  ?> </td>
    <td> <?php echo $res['medtype'];  ?> </td>
    <td> <?php echo $res['med_desc'];  ?> </td>
    <td> <?php echo $res['disease'];  ?> </td>
    <!-- <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
    <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td> -->

   </tr>

  <?php 
   }
  ?>
   
  </table>  

 </div>
 </div>

 <script type="text/javascript">
  
  $(document).ready(function(){
   $('#tabledata').DataTable();
  }) 
  
 </script>

</body>
</html>