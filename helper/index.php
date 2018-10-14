<?php include "../includes/db.php"; ?>
<?php

if(!isset($_SESSION['username'])){
  header("Location:../login");
}

 ?>
   <!doctype html>
   <html>
   <head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../extras/bootstrap.min.css">
  <script src="../extras/jquery.min.js"></script>
  <script src="../extras/bootstrap.min.js"></script>
   </head>
    <body>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">

       <a class="navbar-brand" href="#">Welcome <span class="text-primary font-weight-bold"><?php echo $_SESSION['username']; ?></span></a>


       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
         <span class="navbar-toggler-icon"></span>
       </button>


       <div class="collapse navbar-collapse" id="collapsibleNavbar">
         <ul class="navbar-nav text-center ml-auto text-light">
          <li class="nav-item"><a href="../helper" class="btn btn-dark active">CAMPAIGNS</a></li>
          <li class="nav-item"><a href="#" class="btn btn-dark">DONATIONS</a></li>
          <li class="nav-item"><a class="btn btn-dark mr-2">REPORTS</a></li>
          <a href="../logout.php" class="btn btn-danger">Log Out</a>
         </ul>
       </div>
      </nav>

          <br><br>
             <div class="container mt-4">
               <h4 class="text-center font-weight-bold"><u class="text-danger">Donate For Campaigns for Helping People</u></h4>
               <div class="row m-2">
                 <?php
                    $query=mysqli_query($connection,"SELECT * FROM compaign");
                       while($row=mysqli_fetch_array($query))
                          {
                             $compaign_id=$row['compaign_id'];
                             $title=$row['title'];
                             $date=$row['date'];
                             $image=$row['image'];
                  ?>
                 <div class="col-md-4">
                  <a href="donation/?id=<?php echo $compaign_id ?>">
                    <div class="card m-3" style="width:100%">
                      <div class="card-header text-center">

                      <h5 class="text-secondary"><?php echo $title ?> , <?php echo $date;?></h3>

                      </div>

                           <img class="" src="../images/<?php echo $image;?>" alt="This is an image" style="width:100%;">
                          <br>
                      </div>
                 </a>
                </div>
                <?php } ?>
            </div>
        </div>



                </body>
                </html>
