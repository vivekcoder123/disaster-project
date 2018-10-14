<?php include "../../includes/db.php"; ?>

<?php

if(!isset($_SESSION['username'])){
  header("Location:../../login");
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Victims Status</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../../extras/bootstrap.min.css">
     <link rel="stylesheet" href="../../extras/animate.min.css">
    <script src="../../extras/jquery.min.js"></script>
    <script src="../../extras/bootstrap.min.js"></script>
   </head>
   <body>

     <nav class="navbar navbar-expand-md bg-danger navbar-dark animated shake">

      <a class="navbar-brand" href="#">Victims Status</a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav text-center ml-auto">
          <li class="nav-item btn btn-dark mr-4"><a class="text-light" href="../">Admin Home</a></li>
          <li class="nav-item"><a href="../logout.php" class="btn btn-success">Log Out</a></li>
        </ul>
      </div>
     </nav>

        <div class="container mt-5 animated shake">

          <table class="table table-bordered table-striped">
           <thead class="bg-dark text-light">
            <td>Name</td>
            <td>Phone No.</td>
            <td>Location</td>
            <td>Victims Count</td>
            <td>Problems</td>
            <td>Help_Id</td>
            <td>Status</td>
           </thead>
           <tbody>
             <?php

             $select_victims=mysqli_query($connection,"SELECT * from victims");
             while($row=mysqli_fetch_array($select_victims)){

              ?>
             <tr>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['phone']; ?></td>
               <td><?php echo $row['location']; ?></td>
               <td><?php echo $row['victims_count']; ?></td>
               <td><?php echo $row['problems']; ?></td>
               <td><?php echo $row['help_id']; ?></td>
               <td><?php echo $row['status']; ?></td>
             </tr>
           <?php } ?>
           </tbody>
          </table>

        </div>


   </body>
 </html>
