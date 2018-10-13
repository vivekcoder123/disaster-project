<?php include "../../includes/db.php"; ?>
<?php
  if(isset($_GET['id']))
  {
      $id=$_GET['id'];
  }
?>
<?php

if(isset($_POST['donate'])){

	$amount=trim($_POST['amount']);
	$amount=mysqli_real_escape_string($connection,$amount);

	$date=trim($_POST['date']);
	$date=mysqli_real_escape_string($connection,$date);
    
	$note=trim($_POST['notes']);
	$note=mysqli_real_escape_string($connection,$note);

    $select=mysqli_query($connection,"SELECT * FROM `compaign` WHERE compaign_id='$id'");
      $row=mysqli_fetch_assoc($select);
      $role=$row['title'];
   $insert=mysqli_query($connection,"INSERT into donation() VALUES('','$amount','$date','$role','$note')");

}

 ?>

<!doctype html>
<html lang="en">
    <head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../../extras/bootstrap.min.css">
  <script src="../../extras/jquery.min.js"></script>
  <script src="../../extras/bootstrap.min.js"></script>
    </head>
    <body>

<div class="container mt-5" style="width:50%">
  <h2 class="text-success">Donation for <?php echo $role;?></h2>
  <form method="post" style="width:60%">
    <div class="form-group text-primary">
      <label for="amount">Amount:</label>
      <input type="text" class="form-control"  placeholder="Amount...." name="amount" required>
    </div>
    <div class="form-group text-primary">
      <label for="date">Date</label>
      <input type="text" class="form-control"  placeholder="Enter Date...." name="date" required>
    </div>
    <div class="form-group text-primary">
      <label for="note">Notes:</label> 
    <textarea type="text" role="5" name="notes" class="form-control" placeholder="Enter Your Notes...."></textarea>
      </div>
    <button type="submit" class="btn btn-success" name="donate">Donate</button>
  </form>
    </div>
</body>
</html>