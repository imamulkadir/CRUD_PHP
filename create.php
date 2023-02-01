<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    
    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New user created Succesfully!");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>



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
        <div class="text-center mb-4">
            <h3>Create New User</h3>
            <p class="text-muted">Insert the required information to create a new user</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" class="createForm">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Jack">
                    </div>

                    <div class="col">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Reacher">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="name@domain.com">
                    </div>

                    <div class="form-group mb-3">
                        <label>Gender</label>
                        &nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male" value="Male">
                        <label for="male" class="form-input-label">Male</label>
                        &nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female" value="Female">
                        <label for="female" class="form-input-label">Female</label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                       <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>













<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>