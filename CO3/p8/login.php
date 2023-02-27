<?php
session_start();
$con =mysqli_connect("localhost","root","","student");
if($con ->connect_errno){
    echo "failed ".$con ->connect_errno;
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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

    <form >
        <h1>Login Form</h1>
        <div class="box">

            <div class="input-group">
                <label for="u_name">UserName</label>
                <input type="text" name="u_name" id="u_name">
            </div>
            <div class="input-group">
                <label for="pass">&nbsp;Password</label>
                <input type="text" name="pass" id="pass">
            </div>
            <div class="input-group">

                <input type="submit" name="Submit" class="sub-btn" value="submit">
            </div>
        </div>

<?php

if(isset($_GET['Submit'])){

$name =$_GET['u_name'];
$pass =$_GET['pass'];
$sql ="select name,pass from user where name='$name' and pass='$pass'";

$result =$con->query($sql);
if($rw=$result->fetch_row())
{
$_SESSION["username"]=$rw[0];

header("location:home.php");
}
else
{
echo "Invalid";

}
}

?>
    </form>
</body>

</html>