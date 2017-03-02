<html>
<?php
$conn=mysqli_connect("localhost","root","","proj2");
$sql="select * from review";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
echo "<div>".$row['pname']."</div>";
echo "<div>".$row['review']."</div>";
echo "<div>".$row['date']."</div>";
echo "<input type='button' value='accept'  onclick='abc()'>";
echo "<input type='button' value='reject'name=".$row['pname']." onclick='abcd(this.name)'>";
}

?>
<script type="text/javascript">
function abcd(val)
{
	alert(val);
	var http=new XMLHttpRequest();
	http.open("get","rev.php?abc="+val,true);
	http.send();
	
	http.onreadystatechange = function() {
	if (http.readyState == 4) 
	{
		alert('abcd');
	var res=http.responseText;
	alert(res);
	
}
}
}
function abc()
{
	alert("Accepted");
}
</script>
</html>