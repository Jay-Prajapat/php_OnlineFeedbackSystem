<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<style>
    body{
        background-image: url("image/login.jpg");
    }
    .row{
        margin-left: 400px;
        margin-top: 150px;
    }
</style>

<body>
<h1 style="color: green;text-align: center;">Online Feedback System</h1>
        <hr>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: aqua;">Login Here :</h2>
            <br>
            <form action="validation.php" method="POST">
                <div class="form-group">
                    <label style="color: aqua;">Username :</label>
                    <input type="text" name="user" class="form-control" required>

                </div>
                <div class="form-group">
                    <label style="color: aqua;">Password :</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>    
    
    
</div>
<br>
<br>



</body>
</html>