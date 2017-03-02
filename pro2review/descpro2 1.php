<?php
$nm=$_REQUEST['id'];
echo $nm;
$conn=mysqli_connect("localhost","root","","proj2");

$sql="select * from product where pname='$nm'";
$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result))
{
echo '<img src='.$nm.'></img>';
echo "<div>".$row['pdes']."</div><br>";
echo "<div>".$row['cost']."</div>";
}

$sql="select * from review where name='$nm'";
$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result))
{
echo $row['review'];

}
echo "<a href='addreview.php?id=".$nm."'>addreview</a>";
?>