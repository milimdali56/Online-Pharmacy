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
<link rel="stylesheet" href="css/Smstyle.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <div class="container-fluid">
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
        <div>
                <ul class="nav justify-content-center">
                        <li class="nav-item">
                                <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="products.php">Drugs</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Pharmacies</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Pharamaceuticals</a>
                        </li>
                </ul>
                <hr>
        </div>
        <div class="nav justify-content-center">
            <h2>Medicine Info</h2>                 
        </div>
        <div>
            <h3>Med name  </h3>      
            <b><p class="genname">Generic name</p></b>
            <p>Company name</p>
            <p>Strength</p>
            <b><h4 class="price">Price and Size</h4></b>
            <p>100tk per pack</p>
               <div class="input-group select float-left">
                    <select class="custom-select " id="inputGroupSelect02">
                      <option selected>Choose strength</option>
                      <option value="1">5 mg</option>
                      <option value="2">0.5 mg</option>
                      <option value="3">200mg</option>
                    </select>
                    <div class="input-group-append">
                      <label class="input-group-text" for="inputGroupSelect02">Strength</label>
                    </div>
                </div>
                
                <div class="input-group select float-left">
                        <select class="custom-select" id="inputGroupSelect02">
                          <option selected>Choose quantity</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                          <label class="input-group-text" for="inputGroupSelect02">Quantity</label>
                        </div>
                </div>
                <button type="button" class="btn btn-secondary">Add to bag</button>
                <br>
                <button type="button" class="btn btn-secondary btn-lg alter">Simmilar Medicines</button>
        </div>
        <br>
        <div class="description">
                <div class="jumbotron">
                        <h1 class="display-8">Dosage & Administration</h1>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                       </div> 
        </div>
              <footer>
                      <hr>
                   <div class="footer">
                           footer
                   </div>
              </footer>  
</body>