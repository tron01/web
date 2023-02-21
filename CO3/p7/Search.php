
<?php
$con=mysqli_connect("localhost","root","","sample");
?>
<html>
<body>
<div>
<form action="#" method="POST">
<div>
<label>Title</label>
<input id="searchdata" type="text" name="title" required>
<br>
<button type="submit" name="search" id="submit"> Search</button>
</div>
</form>
</div>
<?php
if(isset($_POST['search']))
{
$title=$_POST['title'];$publish=$_POST['publisher'];
?>
<h4 align="center"> Result </h4>
<center><table border="1px" cellpadding="10px">
<tr>
<th>accession No:</th>
<th> Title</th>
<th> author</th>
<th> edition</th>
<th>publisher</th>
</tr>
</body>
<?php
$sql="SELECT * FROM book where title='$title'";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query))
{?>
<tr>
<td><?php echo ($row['accession']);?></td>
<td><?php echo ($row['title']);?></td>
<td><?php echo ($row['author']);?></td>
<td><?php echo ($row['edition']);?></td>
<td><?php echo ($row['publisher']);?></td>
</tr>
<?php }
}?>
</center>
</table>
</div>
</body>
</html>