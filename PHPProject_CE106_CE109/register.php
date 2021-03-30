<?php 
session_start();
$db=mysqli_connect('localhost','root','','feedback');

$errors=array();
if (isset($_POST['register'])){

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password_1=$_POST['password1'];
    $password_2=$_POST['password2'];


    
        $pass=md5($password_1);
        $sql="INSERT into users (username,email,std_password) VALUES ('$username','$email','$pass')";
        
        #mysqli_query($db,$sql);
        if(!mysqli_query($db,$sql)){
            echo "Form does not Sucessfully";
            
        }
        else{
            echo "Form submited";
            header('location:studentlogin.php');
        }


}
?>

<style>
    body{
        background-image: url("image/register.jpg");
    }
    table{
        margin-top: 140px;
        color: aqua;
    }
</style>

<html>
    <body>
        <h1 style="color: green;text-align: center;">Online Feedback System</h1>
        <hr>
        
        <form action="register.php" method="POST">
            <table border="1" align="center" style="width: 400px;line-height:40px;" >
                <tr>
                    <th colspan="2"> 
                        <h1>Register</h1>
                    </th>
                </tr>
                <tr align="center">
                    <td>
                         <label>Username</label>
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="Enter Username">
                    </td>
                </tr>
                <tr align="center">
                    <td>
                         <label>Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" placeholder="Enter Your Email ID">
                    </td>
                </tr>
                <tr align="center">
                    <td>
                         <label>Password</label>
                    </td>
                    <td>
                        <input type="password" name="password1" placeholder="Enter your Password">
                    </td>
                </tr>
                <tr align="center">
                    <td>
                         <label>Conform Password</label>
                    </td>
                    <td>
                        <input type="password" name="password2" placeholder="Re-Enter Your Password">
                    </td>
                </tr>
                <tr align="center">
                <td colspan="2">
                        <button type="submit" name="register">Register</button>
                </td>
                </tr>
                
                
                
            </table>
            <h3 align="center">
                Already a member ?<a href="studentlogin.php"> sign in</a><br><br>
                If you Admin <a href="login.php">click here</a>


            </h3>
        </form>
    </body>
</html>