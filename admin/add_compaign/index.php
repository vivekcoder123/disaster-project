<?php include "../../includes/db.php"?>

<?php

if(!isset($_SESSION['username'])){
  header("Location:../../login");
}

 ?>

<?php
    if(isset($_POST['submit']))
    {
        $title=$_POST['title'];
        $date=$_POST['date'];
        $image=$_FILES['image']['name'];
        $image_tem=$_FILES['image']['tmp_name'];
        move_uploaded_file($image_tem,"../../images/$image");
        $result=mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `compaign` WHERE title='$title'"));
        if($result==1)
        {
         $_SESSION['error']= "<h5 class='text-danger offset-md-4 mt-5'>This Compaign has alredy submitted</h5>";
        }
        else
        {
        $insert=mysqli_query($connection,"INSERT INTO `compaign`() VALUES ('','$date','$title','$image')");
        $_SESSION['success']= "<h5 class='text-success  offset-md-4 mt-5'>Compaign has submitted successfully</h5>";
        }
    }
?>
<!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <title>Add_Campaigns Page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../../extras/bootstrap.min.css">
     <link rel="stylesheet" href="../../extras/animate.min.css">
    <script src="../../extras/jquery.min.js"></script>
    <script src="../../extras/bootstrap.min.js"></script>
   </head>
   <body>

     <nav class="navbar navbar-expand-md bg-info navbar-dark">
       <a class="navbar-brand" href="#">Add Campaigns</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav text-center ml-auto">
          <li class="nav-item btn btn-dark mr-4"><a class="text-light" href="../">Admin Home</a></li>
          <li class="nav-item"><a href="../" class="btn btn-danger">Log Out</a></li>
        </ul>
       </div>
     </nav>



                   <?php
					if(isset($_SESSION['error'])){
							echo $_SESSION['error'];
						}
						else if(isset($_SESSION['success'])){
								echo $_SESSION['success'];
							}
					 ?>


					<script type="text/javascript">
				   <?php if(isset($_SESSION['success'])){ ?>
				    setTimeout(function(){<?php unset($_SESSION['success']);?>});
				   <?php } ?>
					 <?php if(isset($_SESSION['error'])){ ?>
				    setTimeout(function(){<?php unset($_SESSION['error']);?>});
				   <?php } ?>
				 </script>
         <form method="post" enctype="multipart/form-data" class="mt-5">
             <div class="form-group offset-md-4 col-md-4">
                 <label for="title" class="text-danger font-weight-bold">Disaster Type:</label>
                   <input type="title" class="form-control" name="title" placeholder="Enter Diasater Type...." required>
             </div>
             <div class="form-group offset-md-4 col-md-4">
                 <label for="date" class="text-danger font-weight-bold"> Date: </label>
                   <input type="date" name="date" placeholder="Enter Date...." class="form-control" required>
             </div>
             <div class="form-group offset-md-4 col-md-4">
             <label for="image" class="text-danger font-weight-bold">image:</label>
             <input type="file" name="image" required>
             </div>
             <div class="forrm-group offset-md-4 col-md-1 mt-4">
             <button type="submit" name="submit" class="btn btn-success">Add Campaign</button>
             </div>
         </form>

     </body>
</html>
