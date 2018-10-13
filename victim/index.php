<?php include "../includes/db.php" ?>

<?php

if(isset($_POST['help_submit'])){
  $name=trim($_POST['name']);
  $name=mysqli_real_escape_string($connection,$name);

  $phone=trim($_POST['number']);
  $phone=mysqli_real_escape_string($connection,$phone);

  $location=trim($_POST['location']);
  $location=mysqli_real_escape_string($connection,$location);

  $victims_count=trim($_POST['victims_count']);
  $victims_count=mysqli_real_escape_string($connection,$victims_count);

  $problems=trim($_POST['problems']);
  $problems=mysqli_real_escape_string($connection,$problems);

  $help_id=substr($name,0,4).mt_rand(10000,100000);

  $insert_victims=mysqli_query($connection,"INSERT into victims()VALUES('','$name','$phone','$location','$victims_count','$problems','$help_id')");
  if(!$insert_victims){
    die("Connection Error".mysqli_error($connection));
  }

}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Victim Page</title>
    <link rel="stylesheet" href="../extras/bootstrap.min.css">
    <script src="../extras/jquery.min.js"></script>
    <script src="../extras/popper.min.js"></script>
    <script src="../extras/bootstrap.min.js"></script>
    <style media="screen">
      input{
        text-align: center;
      }
    </style>
  </head>
  <body>

    <?php include "../extras/navbar.php"; ?>

    <?php include "../extras/carousel.php"; ?>
    <br>

    <div class="container-fluid">
    <div class="row">

     <div class="col-md-8" id="gethelpform">
        <form class="" action="" method="post">
          <?php
           if(isset($help_id)){
          ?>
          <h4 class="text-center font-weight-bold alert alert-danger">
            Your help id is <span class="btn btn-primary"><?php echo $help_id; ?></span>
          </h4>
          <p class="lead text-danger">* Note down the help id for tracking the rescue team and for future references</p>
          <br>
        <?php } ?>
              <div class="card">
                 <div class="card-header bg-dark text-light">
                  <h3 class="text-center">Get Help Form</h3>
                 </div>
                 <div class="card-body">
                   <div class="form-group">
                    <input type="text" name="name" placeholder="Enter Name" class="form-control"
                     value="<?php echo isset($_POST['name'])?$_POST['name']:'';?>" required>
                   </div>
                   <div class="form-group">
                    <input type="text" name="number" placeholder="Enter mobile number  (without 0 at starting)" class="form-control"  pattern="[1-9]{1}[0-9]{9}"
                    title="Phone number should contain only numbers from 1-9 with maximum 10 digits"
                     value="<?php echo isset($_POST['number'])?$_POST['number']:'';?>" required>
                   </div>
                   <div class="form-group">
                    <input type="text" name="location" placeholder="Enter Your location" class="form-control"
                     value="<?php echo isset($_POST['location'])?$_POST['location']:'';?>" required>
                   </div>
                   <div class="form-group">
                    <input type="text" name="victims_count" placeholder="Enter Number of victims" class="form-control"
                     value="<?php echo isset($_POST['victims_count'])?$_POST['victims_count']:'';?>" required>
                   </div>
                   <div class="form-group">
                     <textarea name="problems" rows="8" cols="80" placeholder="Enter your problems here" class="form-control"
                      value="<?php echo isset($_POST['problems'])?$_POST['problems']:'';?>" required></textarea>
                   </div>
                   <input type="submit" name="help_submit" value="Generate Help Id" class="btn btn-primary">
                 </div>
                 <div class="card-footer">
                  <!-- <h4>Your generated help id is</h4> -->
                 </div>
              </div>

        </form>
     </div>

     <div class="col-md-4" id="trackhelp">
       <br>
       <form class="" action="" method="post">
         <div class="card">
           <div class="card-header">
             <h4 class="">Track Rescue Team</h4>
           </div>
           <div class="card-body">
             <div class="form-group">
               <input type="text" name="search_help_id" placeholder="Enter Your generated Help Id" class="form-control">
             </div>
             <input type="submit" name="search_rescue_team" value="Track Rescue Team" class="btn btn-block btn-success">
           </div>
         </div>
       </form>
     </div>

    </div>
  </div>



  </body>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
    interval: 2000
    })
  });

  </script>
</html>
