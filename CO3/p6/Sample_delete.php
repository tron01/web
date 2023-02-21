<?php
$con=mysqli_connect("localhost","root","","sample");
$id=$_GET["id"];
if($con)
{
$qry1="delete from studentname where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
} 
}
?>