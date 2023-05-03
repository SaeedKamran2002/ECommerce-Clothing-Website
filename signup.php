<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<?php
	include('conn.php');

	if(isset($_POST['signup']))
    {
		$username=$_POST['username'];
		$password=$_POST['pass'];
        $email = $_POST['email'];

		$conn->query("Insert into users (username,email, password) values ('$username', '$email', '$password')");	
        echo "<script type='text/javascript'>alert('SignUp Successfull!')</script>";
        header("Location: login.php");

	}
?>

<br><br><br><br>

<div class="container w-80 border border-dark" id="contact">
    <section class="mb-4">

        <h2 class="h1-responsive font-weight-bold text-center my-4">SignUp</h2>
    
        <div class="row">
    
            <div class="col-md-9 mb-md-0 mb-5">
                <form action="" method="POST">
    
                  
                    <div class="row">
    
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Your Name" required>
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Your Password" required>    
                            </div>
                        </div>
                    </div>
                    <br>
      
                    <center><input type="submit" value = "SignUp" class="btn btn-primary" name="signup" id="signup"><center><br>
                    
                    
                </form>
            </div></div></section></div>

            <div class="container text-center mt-5">
            <center><a href="index.html" class="btn btn-warning mt-5"> Back </a></center>
        <div>

    
</body>
</html>