<?php
$conn=mysqli_connect("localhost","root","","test1") or die("unable to connect:");
$query="select * from studentdetails";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
echo $row['RollNo'];
echo " ".$row['Name'];
echo " ".$row['Mark'];
echo "<br>";
}


?>


<html>
<head>
</head>
<body>

</body>
</html>
