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
    <title>Welcome</title>
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
        <h1>Welcome  <?php echo $us;?></h1>
        <br>
         click to here <a href="login.php"> logout</a>
    </div>


</body>

</html>