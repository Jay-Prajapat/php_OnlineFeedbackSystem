<?php



$con=mysqli_connect('localhost','root','','feedback');




if(isset($_POST['sname'])){
    if(!empty($_POST['sname']) && !empty($_POST['semail']) ){
        $name=$_POST['sname'];
        $id=$_POST['sid'];
        $email=$_POST['semail'];
        $fac=$_POST['faculty'];
        $sub=$_POST['subject'];
        $qu1=$_POST['q1'];
        $qu2=$_POST['q2'];
        $qu3=$_POST['q3'];
        $qu4=$_POST['q4'];
        $qu5=$_POST['q5'];
        $qu6=$_POST['q6'];
        $qu7=$_POST['q7'];
        $qu8=$_POST['q8'];

        $query="INSERT into feeds(s_name,s_id,s_email,s_faculty,s_subject,s_q1,s_q2,s_q3,s_q4,s_q5,s_q6,s_q7,s_q8) values('$name','$id','$email','$fac','$sub','$qu1','$qu2','$qu3','$qu4','$qu5','$qu6','$qu7','$qu8')";
        #$run=mysqli_query($con,$query) ;
        if(!mysqli_query($con,$query)){
            echo "Form does not Sucessfully";
        }
        else{
            echo "Form submited";
        }
    }
    else{
        echo "all fields required";
    }
    







}
?>
<html>
    <body>
    <br>

        <button style="width: 100px;"><a href="studentlogin.php">Logout</a> </button>
    </body>
</html>