<?php

$email=$_POST['name'];
$pass=$_POST['pass'];
//connection to db
$con=mysqli_connect("localhost","root","","tea");
$af=0;
$q="select name,email from signup where email='$email' AND pass='$pass'";
$res=mysqli_query($con,$q);
//checking the user is already registered
if(mysqli_num_rows($res)>0) 
        {
//used to differentiate the admin and user    
while($f=mysqli_fetch_assoc($res))    {
    $m= $f['name'];
    echo $m;
    $a1 = explode("@", $m);
    echo $a1[1];
    $dom = explode(".", $a1[1]);
    //This code executes when the admin loggs in 
    if($dom[0]=="admin")
     {
        $af=1;
        
        ?>
        <div>
        <h1>ADMIN</h1>
        <h2>welcome <?php echo $f['name']; ?></h2>
        <form method="post" action="admin.php">
        <button class="btn btn-lg btn-outline-dark">LETS DO </button>
        </form>
        </div>
        <?php
     }

//this code executes when the user loggs in 
  if($af==0){
      ?>
    <div>
        
        <h2>welcome <?php echo $f['name']; ?></h2>
        <form method="post" action="user.php">
        <button class="btn btn-lg btn-outline-dark">LETS DO </button>
        </form>
        </div>
        <?php
      
      echo"succesfully log in";
  }      
        
}
}
//when the user enter the invalid password or email
else{
    echo "invalid password";
}

?>
