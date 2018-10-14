<?php include "../../includes/db.php"?>
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Donations Page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../../extras/bootstrap.min.css">
     <link rel="stylesheet" href="../../extras/animate.min.css">
    <script src="../../extras/jquery.min.js"></script>
    <script src="../../extras/bootstrap.min.js"></script>
   </head>
   <body>

     <nav class="navbar navbar-expand-md bg-info navbar-dark">
       <a class="navbar-brand" href="#">Donations</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav text-center ml-auto">
          <li class="nav-item"><a href="../" class="btn btn-danger">Log Out</a></li>
        </ul>
       </div>
     </nav>
     
     <div class="table-responsive-md mt-5 p-5">
         <table class="table table-bordered text-center">
             <thead>
                 <tr class="animated bounceIn text-primary">
                     <th>
                         Donation_id
                     </th>
                     <th>
                         Doantion_ amount
                     </th>
                     <th>
                         Donation_date
                     </th>
                     <th>
                         Donation_for
                     </th>
                     <th>
                         Donation_remark
                     </th>   
                 </tr>
             </thead>
             <tbody>
                 <?php 
                 $select=mysqli_query($connection,"SELECT * FROM `donation`");
                 while($row=mysqli_fetch_assoc($select))
                 {
                     $id=$row['donation_id'];
                     $amount=$row['amount'];
                     $date=$row['date'];
                     $compaign=$row['compaign'];
                     $remark=$row['note'];
                 ?>
                 <tr class="animated bounceIn text-danger">
                     <td>
                         <?php echo $id ?>
                     </td>
                     <td>
                          <?php echo $amount ?>
                     </td>
                     <td>
                          <?php echo $date ?>
                     </td>
                     <td>
                          <?php echo $compaign ?>
                     </td>
                     <td>
                          <?php echo $remark ?>
                     </td>
                 </tr>
                 <?php } ?>
             </tbody>
         </table>
     </div>
  </body>
</html>