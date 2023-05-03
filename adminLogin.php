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

    <style>
        .sss:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
    require_once 'conn.php';
    session_start();

    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM adminusers";
        $view_users = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($view_users)) 
        {
            if($email == $row["email"] && $pass == $row["password"])
            {
                $_SESSION["userId"] = $row["userid"];
                $_SESSION["username"] = $row["username"];
                header('Location: productView.php');
                exit();
            }
        }

    }

?>

<br><br><br><br>

<div class="container border border-dark"  style="width:20%" >

        <h2 class="h1-responsive font-weight-bold text-center my-4">Login As Admin</h2>
    
        <div class="row">
    
            <div class="col-md-9 mb-md-0 mb-5">

                <form form action="" method="post">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="lg-form mb-0">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="md-form mb-0">
                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                    </div>
                    <br>
      
                    <center><input type="submit" value = "Login" class="btn btn-primary" name="login" id="login"><center><br>
                        <center><a class="sss" href="adminLogin.php" style="color: blue; text-decoration: none">Login As Admin</a></center>
                    <br>
                </form>
            </div>
        </div>
</div>

<div class="container text-center mt-5">
            <center><a href="index.html" class="btn btn-warning mt-5"> Back </a></center>
        <div>
            
</body>
</html>