<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD OPERATIONS</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 navEdit">
        COMPLETE PHP CRUD OPERATIONS
    </nav>
    
    <div class="container">

        <?php 
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa-solid fa-circle-check"></i>
            '.$msg.'
            <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close">
            
            </button>
          </div>';
        }
        
        
        ?>


        <a href="create.php" class="btn btn-info mb-3 ">Create New User</a>

        <table class="table table-hover text-center">
            <thead class="table-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM `crud`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['first_name'] ?></td>
                            <td><?php echo $row['last_name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row['id'] ?>" class="line-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="text-danger fs-5 me-3"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>

            </tbody>
        </table>
    </div>





<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>