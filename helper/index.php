<?php include "../includes/db.php"; ?>
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
    <nav class="navbar navbar-expand-md bg-dark navbar-light fixed-top">
      <form class="form-inline">
       <a  href="#" class="btn btn-success form-contol ml-5">Compaign</a>
       <a  href="#" class="btn btn-primary form-contol ml-3">reports</a>
        </form>    
    </nav>
         
          <br><br>
             <div class="container">
               <div class="row mt-1">
                 <?php 
                    $query=mysqli_query($connection,"SELECT * FROM `compaign`");
                       while($row=mysqli_fetch_assoc($query))
                          {
                             $compaign_id=$row['compaign_id'];
                             $title=$row['title'];
                             $month=$row['month'];
                             $year=$row['year'];
                             $image=$row['image'];           
                  ?>
                 <div class="col-md-4">
                  <a href="../helper/donation/?id=<?php echo $compaign_id ?>">
                    <div class="card m-3" style="width:100%">
                      <div class="card-header text-center">
                        <h2 class="card-title">
                           <h3 class="text-secondary"><?php echo $title ?>,<?php echo $month;?><?php echo"";?><?php echo $year;?></h3>
                        </h2>
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