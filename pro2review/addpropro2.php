<?php
$brand=$_POST['brand'];
$prodes=$_POST['prodes'];
$cost=$_POST['cost'];
$conn=mysqli_connect("localhost","root","","proj2");
$pronm=$_FILES["file"]["name"];
$sql1="insert into product values('$pronm','$prodes',$cost,'$brand')";
if(mysqli_query($conn,$sql1))
{
	die("added");
}

?>
