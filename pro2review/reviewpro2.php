<?php

$nm=$_REQUEST['nm'];
$conn=mysqli_connect("localhost","root","","proj2");
$sql="select * from review where pname='$nm'";
$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result))
{
echo $row['review'];
}

?>
