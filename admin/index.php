<?php include "../includes/db.php"; ?>
<?php

if(!isset($_SESSION['username'])){
  header("Location:../login");
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Admin Page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../extras/bootstrap.min.css">
     <link rel="stylesheet" href="../extras/animate.min.css">
    <script src="../extras/jquery.min.js"></script>
    <script src="../extras/bootstrap.min.js"></script>
   </head>
   <body>

     <nav class="navbar navbar-expand-md bg-success navbar-dark">

      <a class="navbar-brand" href="#">Admin</a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>

            </button>


      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav text-center ml-auto">
          <li class="nav-item"><a href="../logout.php" class="btn btn-danger">Log Out</a></li>
        </ul>
      </div>
     </nav>
     <div class="container mt-5 pt-5">
     <a  href="donation/" class="btn btn-primary btn-block col-md-4 offset-md-4 p-4 font-weight-bold animated bounceInDown">DONATIONS</a>
      <br>
      <div class="form-inline">
        <a href="compaigns/" class="col-md-4 btn btn-warning mb-4 p-4 font-weight-bold animated bounceInLeft">CAMPAIGNS</a>

        <a href="victim_status" class="col-md-4 btn btn-danger offset-md-4 mb-4 p-4 font-weight-bold animated bounceInRight">VICTIMS STATUS</a>
        <br>
      </div>

      <div class="btn btn-dark btn-block col-md-4 offset-md-4 p-4 font-weight-bold animated bounceInUp">REPORTS</div>
     </div>


   </body>
 </html>
