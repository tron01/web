<?php
$con=mysqli_connect("localhost","root","","sample");
$id=$_POST['admission'];
$title=$_POST['title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$sql="SELECT * FROM book where title='$title' and edition='$edition'";
$query=mysqli_query($con,$sql);
$count=mysqli_num_rows($query);
if($count>0)
{?>
<script> alert("Book already Added");</script>
<?php
header("location:info.html");
}
else
{
$details="INSERT INTO book(id,accession,title,author,edition,publisher)values
(null,'$id','$title','$author','$edition','$publish')";
if(mysqli_query($con,$details))
{?>
<script>alert("Book added successfully");
</script>
<?php header("location:info.html");
}
}
mysqli_close($con);
?>
