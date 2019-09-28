<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .id{
            height: 500px;
            width: 400px;
        }
        h1{
            
            margin-left:50px;
        }
        
    
    </style>
</head>
<body>
    
        <?php 
        
        $id=$_POST['val'];
        echo $id;
        $con=mysqli_connect("localhost","root","","tea");
        $q="select pho,cost from cart where pid='$id';";
        
        $res=mysqli_query($con,$q);
        if($res){
        
        }
        while($f=mysqli_fetch_array($res)){
            
        ?>
         
         <img src="<?php echo $f['pho'];?>" alt="img"  class="id">
         
        
            
         <h1><?php  echo $f['cost'];   ?></h1>
          <?php
        }
        
        ?>
        

</body>
</html>