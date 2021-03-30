<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'feedback');

$query="SELECT id,username,email from users ";
$result=mysqli_query($con,$query);


?>


<html>
<head>
    <title>        
        Students List
    </title>
</head>

<style>
    body{
        background-image: url("image/feedback.jpg");
    }
</style>

    <body>
    <button style="width: 100px;"><a href="login.php">Logout</a> </button>
        <table align="center" border="1" style="width: 600px;line-height:30px;">
            <tr>
                <th colspan="3">
                    <h2>
                    Students List
                    </h2>

                </th>
            </tr>
            <tr>
                <th>
                    ID.
                </th>
                <th>Username</th>
                <th>Email</th>
                
            </tr>
            <?php
                while($row=mysqli_fetch_assoc($result))
                {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                   


                </tr>
            <?php
                }
            ?>

            
        </table>
    </body>
</html>