<?php

$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['pho'];
$pass=$_POST['pass'];
//connection
$con=mysqli_connect("localhost","root","","tea");
if($name!=NULL ||$dob!=NULL || $email!=NULL || $phone!=NULL || $pass!=NULL){
    //query for insertion
$q="insert into signup(name,email,dob,phone,pass) VALUES ('$name','$email','$dob','$phone','$pass');";
$res=mysqli_query($con,$q);
}
else{
    echo "some fields are missing";
}
if($res){
    echo "inserted succesfully";
}
else{
    echo "error";
}


?>