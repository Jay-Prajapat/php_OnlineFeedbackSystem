<?php 
session_start();
$db=mysqli_connect('localhost','root','','feedback');

$errors=array();
if (isset($_POST['login'])){

    $username=$_POST['username'];
    
    $password=$_POST['password1'];
    


    
    $pass=md5($password);
    $sql="select * from users where username='$username' && std_password='$pass'";
        
    #mysqli_query($db,$sql);
    if(!mysqli_query($db,$sql)){
        echo "not loggin";
            
    }
    else{
        echo "logged in";
        header('location:home.php');
    }


}
?>

<style>
    body{
        background-image: url("image/studentlogin.jpg");
    }

    table{
        margin-top: 140px;
        color: navy;
    }
</style>

<html>
    <body>
        
        <form action="studentlogin.php" method="POST">
            <table border="1" align="center" style="width: 400px;line-height:40px;" action="register.php" method="POST">
                <tr align="center">
                    <th colspan="2"> 
                        <h2>Login</h2>
                    </th>
                </tr>
                <tr align="center">
                    <td>
                         <label>Username</label>
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="Enter Your Username">
                    </td>
                </tr>
               
                <tr align="center">
                    <td>
                         <label>Password</label>
                    </td>
                    <td>
                        <input type="password" name="password1" placeholder="Enter your password">
                    </td>
                </tr>
                
                <tr align="center">
                <td colspan="2">
                        <button type="submit" name="login">Login</button>
                </td>
                </tr>
                
                
                
            </table>
            <h3 align="center">
                Not yet a member ?<a href="register.php">sign up</a><br><br>
                If you Admin <a href="login.php">click here</a>


            </h3>
        </form>
    </body>
</html>