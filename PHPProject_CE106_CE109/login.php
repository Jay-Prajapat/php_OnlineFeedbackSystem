<?php
$con = mysqli_connect('localhost','root','','feedback');

if(isset($_POST['username'])){
    
    if(!empty($_POST['username']) && !empty($_POST['password']) ){
        $uname = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * from login where name '".$uname."'AND password='".$password."' ";

        // $result = mysqli_query($con,$sql);
        if(!mysqli_query($con,$sql)){
            echo " You have successfully Logged in...";
           
        }
        else{
            echo " You have entered Incorrect password.";
           
        }
    }
    else{
        echo "1";
    }
    

    
}
else{
    echo "3";
}
?>

<html>
<head>
</head>
<body>
<form method="POST">
    <table border="1">
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username" id="username"></td>
    </tr>

    <tr>
    <td>Password:</td>
    <td><input type="password" name="passwrod" id="password" value="password"></td>
    </tr>

    <tr>
    <td><input type="submit" vlaue="Log in"></td>
    </tr>
    </table>
    </form>
</body>
</html>