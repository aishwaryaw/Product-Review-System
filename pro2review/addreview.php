<?php
session_start();
if(isset($_SESSION['pwd']))
{
echo "<form method='POST'action='#'>";
echo "brand:<input type='text' name='brand'><br>";
echo "REVIEW:<input type='text' name='rev'><br>";
echo "NAME:<input type='text' name='name'><br>";
echo "<input type='submit'>";
echo "</form>";

$conn=mysqli_connect("localhost","root","","proj2");
$nm=$_REQUEST['id'];
$name=$_POST['name'];
$rev=$_POST['rev'];
$str=strtotime('today');
$date=date('yy-mm-dd',$str);
$sql1="select * from review where pname='$nm'";
$result=mysqli_query($conn,$sql1);
$sql="insert into review values('$nm','$rev','$name',$date)";
if(mysqli_query($conn,$sql))
{
echo "review added";
}
}

else
{
echo "login plz";
echo "<a href='loginpro2.html'>login</a>";	
}

?>
