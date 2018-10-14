<?php include "../../includes/db.php"; ?>

<?php

if(!isset($_SESSION['username'])){
  header("Location:../../login");
}

 ?>

<?php
  if(isset($_GET['id']))
  {
      $id=$_GET['id'];
      $select=mysqli_query($connection,"SELECT * FROM compaign WHERE compaign_id='$id'");
      $row=mysqli_fetch_array($select);
      $role=$row['title'];
  }
?>
<?php

if(isset($_POST['donate'])){

	$amount=trim($_POST['amount']);
	$amount=mysqli_real_escape_string($connection,$amount);

	$date=trim($_POST['date']);
	$date=mysqli_real_escape_string($connection,$date);

  if(isset($_POST['notes'])){

	$note=trim($_POST['notes']);
	$note=mysqli_real_escape_string($connection,$note);

}else{
  $note="Empty";
}

  $insert=mysqli_query($connection,"INSERT into donation() VALUES('','$amount','$date','$role','$note')");

}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Donation</title>
   </head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../../extras/bootstrap.min.css">
  <script src="../../extras/jquery.min.js"></script>
  <script src="../../extras/bootstrap.min.js"></script>
    </head>
    <body>

      <nav class="navbar navbar-expand-md bg-dark navbar-dark">

       <a class="navbar-brand" href="#">Welcome <span class="text-primary font-weight-bold"><?php echo $_SESSION['username']; ?></span></a>


       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
         <span class="navbar-toggler-icon"></span>
       </button>


       <div class="collapse navbar-collapse" id="collapsibleNavbar">
         <ul class="navbar-nav text-center ml-auto text-light">
          <li class="nav-item"><a href="../" class="btn btn-dark">CAMPAIGNS</a></li>
          <li class="nav-item"><a href="#" class="btn btn-dark active">DONATIONS</a></li>
          <li class="nav-item"><a class="btn btn-dark mr-2">REPORTS</a></li>
          <a href="../../logout.php" class="btn btn-danger">Log Out</a>
         </ul>
       </div>
      </nav>


<div class="container mt-5">

  <h3 class="text-success font-weight-bold text-center">Donation for <?php echo $role;?></h3>
  <form method="post" class="mt-4"  style="">
    <div class="form-group text-primary offset-md-4 col-md-4">
      <label for="amount">Amount:</label>
      <input type="text" class="form-control"  placeholder="Amount...." name="amount" required>
    </div>
    <div class="form-group text-primary offset-md-4 col-md-4">
      <label for="date">Date</label>
      <input type="date" class="form-control"  placeholder="Enter Date...." name="date" required>
    </div>
    <div class="form-group text-primary offset-md-4 col-md-4">
      <label for="note">Remarks:</label>
    <textarea type="text" role="5" name="notes" class="form-control" placeholder="Enter Remarks (Optional)...."></textarea>
      </div>
      <div class="text-center">
    <button type="submit" class="btn btn-success" name="donate">Donate</button>
      </div>
  </form>
    </div>
</body>
</html>
