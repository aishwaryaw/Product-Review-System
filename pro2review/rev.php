<?php

$nm=$_GET['abc'];
$conn=mysqli_connect("localhost","root","","proj2");
if(!$conn){
	die('failed..!'.mysqli_error($conn));
}
$sql="delete from review where pname='$nm'";

$sql1=mysqli_query($conn,$sql);
if(!$sql1){
	die('failed..!'.mysqli_error($conn));
}
echo "Rejected";
?>