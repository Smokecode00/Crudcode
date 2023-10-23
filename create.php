<?php
    include "Includes/dbconn.php";

    if (isset($_POST['submit'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO `gittable`(`id`, `firstname`, `lastname`, `email`, `dateofbirth`, `address`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$birthday','$address','$gender')";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location:read.php?msg=New Record Created Successfully");
        }
        else{
            echo "Failed:". mysqli_error($conn);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CRUD</title>
</head>
<body style="background-color:#5C8374;">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #99B080; font-weight:700;">
        Create, Read, Update, and Delete
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New User</h3>
            <p>Complete the form below to add a new user</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:35vw; min-width:300px;">
                <div class="row mb-2">
                    <div class="col mb-3">
                        <label class="form-label" style="font-weight:700;">First Name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Enter your firstname" required>
                    </div>

                    <div class="col">
                        <label class="form-label" style="font-weight:700;">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter your lastname" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-weight:700;">Email:</label>
                        <input type="text" class="form-control" name="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight:700;">Date of Birth</label>
                        <input type="date" class="form-control" name="birthday" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight:700;">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter your address" required>
                    </div>

                    <div class="form-group mb-3">
                        <label style="font-weight:700;">Gender:</label> &nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male" value="Male">
                        <label for="male" class="form-input-label">Male</label>
                        &nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female" value="Female">
                        <label for="female" class="form-input-label">Female</label>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" name="submit" style="Font-weight:700;">SAVE</button>
                        <a href="read.php" class="btn btn-danger" style="font-weight:700;">CANCEL</a>
                    </div>
                </div>
            </form>
        </div>



    </div>
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>