<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php 
$con=mysqli_connect("localhost","root","","tea");
$q="select * from cart ";
$res=mysqli_query($con,$q);
    ?>
<div class="nav">
   <?php
    while($f=mysqli_fetch_array($res))
    {
    ?>
    <form method="post" action="booking.php">
     <div class="col-md-4 col-sm-3">
    <div class="card" style="width: 18rem;">
  <img src="<?php echo $f['pho']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $f['name']; ?> </h5>
    COST:
    <p class="card-text">
       <span class="display-4">
        <?php echo $f['cost'] ; ?>
        </span>
    </p>
    <input type="hidden" value="<?php echo $id;?>">
    <button type="submit" class="btn btn-primary btn-lg" > Order</button>

    
    
  </div>
  
</div>
 
    
</div>     
    </form>
   <?php
    
    }
    ?>
</div>


</body>
</html>