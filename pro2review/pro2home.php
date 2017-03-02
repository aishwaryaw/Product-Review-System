<html>
<div id="home" style="border:2px solid black">
<a href ="adminlopro2.html">admin login</a>
<a href="loginpro2.html">sign in</a>
<a href="<?php echo $_SERVER['PHP_SELF'];?> ">HOME</a>
</div>
<?php
$conn=mysqli_connect("localhost","root","","proj2");
$sql="select * from product";
$result=mysqli_query($conn,$sql);
while(($row=mysqli_fetch_array($result))>0)
{
$brand=$row['brand'];
$nm=$row['pname'];
echo "<img src=".$nm." style='height:200px;width:200px'></img>";

echo "<a href='descpro2.php?id=".$nm."'>".$brand."</a>";
}
?>

</html>
 