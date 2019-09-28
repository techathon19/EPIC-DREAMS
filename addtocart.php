<?php
$pid=$_POST['pid'];
$name=$_POST['name'];
$cost=$_POST['cost'];
$pho=$_POST['pho'];
echo $pid,$name;
$con=mysqli_connect("localhost","root","","tea");

$q="insert into cart 
(pid,name,cost,pho)VALUES('$pid','$name','$cost','$pho');";
$res=mysqli_query($con,$q);
if($q){
    echo "inserted succesfully";
}
else{
    echo "error";
}
?>