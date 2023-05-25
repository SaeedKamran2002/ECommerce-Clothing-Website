<?php include "admin_header.php" ?>

<div class="container">
    <br>
    <h1 class="text-center">Users</h1>

    <br>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">

            <tr>
                <th scope="col">User ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone No</th>
                <th  scope="col" colspan="3" class="text-center">Operations</th>
            </tr>

        </thead>
        <tbody>
            <tr>

                <?php

                require_once 'conn.php';

                $query = "SELECT * FROM users";
                $view_users = mysqli_query($conn, $query);


                while ($row = mysqli_fetch_assoc($view_users)) {
                    $userid = $row['id'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $address = $row['address'];
                    $phoneNo = $row['phoneNo'];

                    echo "<tr >";

                    echo " <th scope='row' >{$userid}</th>";
                    echo " <td > {$username}</td>";
                    echo " <td > {$email}</td>";
                    echo " <td >{$address} </td>";
                    echo " <td > {$phoneNo}</td>";
                    echo " <td  class='text-center'>  <a href='deleteUser.php?delete={$userid}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              


                    echo " </tr> ";
                }

                ?>
            </tr>
        </tbody>
    </table>
    
    <div class="container text-center">
            <center><a href="productView.php" class="btn btn-warning mt-5"> Back </a></center>
        <div>
      <br>
      <br>

<?php include "admin_footer.php" ?>