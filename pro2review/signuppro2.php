<?php
session_start();

$name=$_GET['nm'];
$pwd=$_GET['pwd'];
//echo $name;
//echo $pwd;

$conn=mysqli_connect("localhost","root","","proj2");
if(!$conn){
	die('failed..!'.mysqli_error($conn));
}

$sql="select * from user where name='$name'and pwd='$pwd'";

$_SESSION['nm']=$name;
$_SESSION['pwd']=$pwd;

$result=mysqli_query($conn,$sql);
if(!$result){
	die('failed..!'.mysqli_error($conn));
}

if(mysqli_fetch_array($result)>0)
{
	echo "u r our user";
}
else
{
$sql1="insert into user values('$name','$pwd')";
 $result1 = mysqli_query($conn,$sql1);
 if(!$result){
	die('failed..!'.mysqli_error($conn));
}
else{
	echo "u r added";
}

}
?>