<?php include "admin_header.php" ?>

<?php
	include('conn.php');

	if(isset($_POST['create']))
    {
		$username=$_POST['username'];
		$password=$_POST['pass'];
        $email = $_POST['email'];

		$conn->query("Insert into adminusers (username,email, password) values ('$username', '$email', '$password')");	
        echo "<script type='text/javascript'>alert('User Craeted Successfully!')</script>";
        header("Location: productView.php");

	}
?>

<br><br><br><br>

<div class="container w-80 border border-dark" id="contact">
    <section class="mb-4">

        <h2 class="h1-responsive font-weight-bold text-center my-4">Create New Admin User</h2>
    
        <div class="row">
    
            <div class="col-md-9 mb-md-0 mb-5">
                <form action="" method="POST">
    
                  
                    <div class="row">
    
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Enter Password">    
                            </div>
                        </div>
                    </div>
                    <br>
      
                    <center><input type="submit" value = "Create" class="btn btn-primary" name="create" id="create"><center><br>
                    
                    
                </form>
            </div></div></section></div>

    
</body>
</html>