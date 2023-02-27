<?php
session_start();
$us= $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <style>
        body {
            height: 100vh;
            background-color: rgb(55, 228, 228);
            display: flex;
            justify-content: center;
        }

        .box {
            padding: 70px;
            background: rgb(207, 205, 205);
            width: 400px;
            height: 200px;
            border-radius: 9px;
        }

        h1 {
            text-align: center;
            text-decoration: dashed;
            text-transform: uppercase;
        }
        
    </style>
</head>

<body>



    <div class="box">
        <table>
            <table border="1px">
                <tr>
                    <th>Roll no</th>
                    <th>Name</th>
                    <th>Batch</th>
                </tr>
                <?php
                $con =mysqli_connect('localhost','root','','demo') or die('connection failed!!');
                $sql ="select * from user";
                $result =mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($result)){

                
               ?><tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php  echo$row['batch'];?></td>
               </tr>
               <?php }?>
            </table>

        </table>
    </div>


</body>

</html>