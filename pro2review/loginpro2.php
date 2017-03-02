<?php
$name=$_REQUEST['nm'];
$pwd=$_REQUEST['pwd'];

$conn=mysqli_connect("localhost","root","","proj2");


$sql="select * from admin where uname='$name'and pwd='$pwd'";


$result=mysqli_query($conn,$sql);

if($row=mysqli_fetch_array($result)>0)
{
	echo "go on";
}
else
{
	echo "u cant login";
}
?>