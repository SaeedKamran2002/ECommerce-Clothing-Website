<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast's Clohtings.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<link rel="stylesheet" href="style.css">

    <div class = "h1 text-success text-center">Dashboard</div>

    <br>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top" id="nav1">

        <div style="float: left;">
            <a class="navbar-brand" href="https://www.nu.edu.pk/">
                <img src="Fast Logo.png" width="80" height="35" class="d-inline-block align-top" alt="">
                <b>Fast Clothing.com</b>
            </a>
        </div>


        <div class="collapse navbar-collapse" id="navbarNavDropdown"
            style="display: flex; justify-content: center; flex-direction: row; margin-left: -25vw;">
            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="productView.php">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="addProduct.php">Add Product</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="order.php">Orders</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="newAdmin.php">Create New Admin User</a>
                </li>

                
            </ul>
        </div>

                <div style="float: right;">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="logout.php"><button class="btn btn-light">Logout</button></a>
                        </li>

                        <li class="nav-item text-white mt-2" style="margin-left: 1vw; margin-right: 1vw;">
                            <?php
                                require_once 'conn.php';
                                session_start();

                                if(isset($_SESSION["userId"]))
                                {
                                    echo "User:  " . $_SESSION["username"];
                                }
                            ?>
                        </li>

                    </ul>
                </div>
                
            

    </nav>
