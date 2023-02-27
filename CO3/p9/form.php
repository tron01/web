<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
    <style>
        body {
            height: 100vh;
            background-color: aqua;
            display: flex;
            justify-content: center;
        }

        .box {
            padding: 70px;
            background: rgb(31, 39, 82);
            width: 400px;
            height: 200px;
            border-radius: 9px;
        }

        h1 {
            text-align: center;
            text-decoration: dashed;
            text-transform: uppercase;
        }

        .input-group {
            padding: 10px;
        }

        input {
            width: 250px;
            height: 40px;
            border: none;
            outline: none;
            border-radius: 9px;
        }

        .input-group label {
            margin-right: 5px;

            color: #f0dfdffe;
        }

        .sub-btn {
            width: 100px;
            background-color: brown;
            margin-left: 35%;
        }
    </style>
</head>

<body>

    <form method ="post" >
        <h1>student Form</h1>
        <div class="box">

            <div class="input-group">
                <label for="u_name">Name</label>
                <input type="text" name="u_name" id="u_name">
            </div>
            <div class="input-group">
                <label for="pass">&nbsp;batch</label>
                <input type="text" name="batch" id="pass">
            </div>
            <div class="input-group">

                <input type="submit" name="submit" class="sub-btn" value="submit">
            </div>
        </div>


    </form>
</body>

</html>
<?php

$con =mysqli_connect('localhost','root','','demo') or die('connection failed!!');
if(isset($_POST['submit'])){
$name=$_POST["u_name"];

$batch=$_POST["batch"];
$sql="insert into user (name,batch) values('$name','$batch');";
if(mysqli_query($con,$sql)){
    header("location:view.php");
}


}

?>