<?php include "../../includes/db.php"?>
<?php

if(!isset($_SESSION['username'])){
  header("Location:../../login");
}

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    mysqli_query($connection,"DELETE FROM `compaign` WHERE compaign_id='$id'");
    header("Location:../compaigns/");
}
?>
<!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <title>Campaigns Page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../../extras/bootstrap.min.css">
     <link rel="stylesheet" href="../../extras/animate.min.css">
    <script src="../../extras/jquery.min.js"></script>
    <script src="../../extras/bootstrap.min.js"></script>
   </head>
   <body>

     <nav class="navbar navbar-expand-md bg-warning navbar-dark">
       <a class="navbar-brand text-dark font-weight-bold" href="#">Campaigns</a>
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
      <div class="container pt-4">
      <br>
      <div class="form-inline">
        <a href="../add_compaign/" class="col-md-4 btn btn-warning mb-4 offset-md-4 font-weight-bold animated bounceInLeft"> ADD CAMPAIGNS</a>
        <br>
      </div>
        <div class="table-responsive-md mt-3">
         <table class="table table-bordered text-center">
             <thead>
                 <tr class="font-weight-bold animated bounceIn text-success">
                     <th>
                         Compaign_id
                     </th>
                     <th>
                         Comapign_date
                     </th>
                     <th>
                         Compaign_title
                     </th>
                     <th>
                         Compaign_image
                     </th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                 $select=mysqli_query($connection,"SELECT * FROM `compaign`");
                 while($row=mysqli_fetch_assoc($select))
                 {
                     $id=$row['compaign_id'];
                     $date=$row['date'];
                     $title=$row['title'];
                     $image=$row['image'];
                 ?>
                 <tr class="animated bounceIn text-primary">
                     <td>
                         <?php echo $id ?>
                     </td>
                     <td>
                          <?php echo $date ?>
                     </td>
                     <td>
                          <?php echo $title ?>
                     </td>
                     <td>
                          <?php echo $image ?>
                     </td>
                     <td>
                        <a href="?id=<?php echo $id ?>" class="text-danger">delete</a>
                     </td>
                 </tr>
                 <?php } ?>
             </tbody>
         </table>
          </div>
     </div>
  </body>
</html>
