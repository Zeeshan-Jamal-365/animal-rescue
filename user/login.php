<?php
session_start();

if (isset($_SESSION['email'])) {
    header("location: profile.php");
    exit;
}
require_once "config.php";

$email = $password = "";
$err = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {
        $err = "Please enter email or password";
    } else {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    }

    if (empty($err)) {
        $sql = "SELECT id, email,password FROM volunteers WHERE email=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        $param_email = $email;

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {

                        session_start();
                        $_SESSION["email"] = $email;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;
                        header("location: profile.php");
                    }
                }
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Volunteer login</title>
    <style>
        body,
        html {
            height: 100%;
        }

        .bg {
            /* The image used */
            background-image: url("husky.jpg");
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            color: rgba(0, 0, 0, 5);
        }
    </style>
</head>

<body>
    <div class="bg">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">PROTECT PETS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Rescue
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Post</a>
                                <a class="dropdown-item" href="#">News</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Information
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Food</a>
                                <a class="dropdown-item" href="#">Vaccine</a>

                                <style>
                                    .dropbtn {
                                        background-color: #4CAF50;
                                        color: white;
                                        padding: 16px;
                                        font-size: 16px;
                                        border: none;
                                    }

                                    .dropdown {
                                        position: relative;
                                        display: inline-block;
                                    }

                                    .dropdown-content {
                                        display: none;
                                        position: absolute;
                                        background-color: #f1f1f1;
                                        min-width: 160px;
                                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                        z-index: 1;
                                    }

                                    .dropdown-content a {
                                        color: black;
                                        padding: 12px 16px;
                                        text-decoration: none;
                                        display: block;
                                    }

                                    .dropdown-content a:hover {
                                        background-color: #ddd;
                                    }

                                    .dropdown:hover .dropdown-content {
                                        display: block;
                                    }

                                    .dropdown:hover .dropbtn {
                                        background-color: #3e8e41;
                                    }
                                </style>

                                <div class="dropdown">
                                    <button class="dropbtn">How to take care of animals
                                        <div class="dropdown-content">
                                            <a href="">Cat</a>
                                            <a href="">Dog</a>
                                        </div>
                                    </button>
                                </div>
                                <a class="dropdown-item" href="#">Vets</a>
                                <a class="dropdown-item" href="#">Study</a>
                            </div>
                        </div>








                        <li class="nav-item">
                            <a class="nav-link" href="registerlogin.php">Register & Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="volunteer.php">Volunteer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="thanks.php">Thanks</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>








        <div class="container mt-4">

            <h1>User Login</h1>
            <hr>
            <form action="" method="post">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>