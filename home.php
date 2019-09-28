<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Josefin Sans', sans-serif;
            background-color: black;
            
        }
        .sp{
            background-color: black;
            color: white;
            
        }
        .li{
            float:right;
        }
       
        ul{
            
            color:black;
        }
    </style>
</head>
<body>
 
 //navbar 
   <div class="container-fluid nav sp" >
  
        <span>
     <h1>
      HOT TEA
      </h1>
  </span>
 
       
     
        <ul>
           <a href="#">
            HOME
            </a>
        </ul>
        <ul>
           <a href="aboutus.php">
            ABOUT US
            </a>
        </ul>
        
     //log in and sign up buttons
      <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
  LOGIN
</button>
    &nbsp;&nbsp;
    <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModalLongs">
  SIGN-UP
</button>
    &nbsp;  

       
       
    //code for carousel   
   </div>
    <div class="container-fluid car ">
<div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="tea-1150046_1920.jpg" class="d-block w-100" alt="palm">
    </div>
    <div class="carousel-item">
      <img src="beverage-1869716_1920.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="plantation-945400_1920.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>




<div class="modal fade me " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="login.php" method="post">
      <div class="modal-body">
        
         EMAIL
        <input type="text" class="form-control"  name="name">
        <br>
         PASSWORD
         <input type="password" class="form-control" name="pass">
         
        
         <br><br>
         <input type="submit" class="btn btn-lg btn-primary" >   
         
          </div>               
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>



<div class="modal fade colo" id="exampleModalLongs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">SIGN UP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="post" action="storedata.php">
      <div class="modal-body">
      <form method="post" action="storedata.php">
         NAME
        <input type="text" class="form-control" name="name" >
        
         DOB:
         <input type="text" class="form-control" name="dob">
        
         EMAIL 
         <input type="text" class="form-control" name="email">
         PHONE:
         <input type="text" class="form-control" name="pho">
        
          PASSWORD:
         <input type="password" class="form-control" name="pass">
         

         <br>
        <button type="submit" class=" btn btn-lg btn-primary " >REGISTER</button>                 
        </form>
        </div>
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
        
    </div>
  </div>
</div>






</body>
</html>