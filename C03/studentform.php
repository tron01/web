<?php
$conn=mysqli_connect("localhost","root","","test1") or die("unable to connect:");
if(isset($_POST['reg']))
{
$roll=$_POST['rollno'];
$name=$_POST['name'];
$mark=$_POST['mark'];
$query="insert into studentdetails(RollNo,Name,Mark) values($roll,'$name',$mark) ";
mysqli_query($conn,$query);
}
?>


<html>
<head>
</head>
<body>
<h2>ENTER THE DETAILS</h2>
<a href="view_student.php">student data</a>
<br>
<br>
<form action="" method="post">
<input type="number" name="rollno" placeholder="ROLL No" required>
<br>
<br>
<input type="text" name="name" placeholder="NAME" required>
<br>
<br>
<input type="number" name="mark" placeholder="MARK" required>
<br>
<br>
<input type="submit" name="reg" value="insert">
</form>

</body>
