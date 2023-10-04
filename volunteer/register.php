<?php
require_once "config.php";
$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";
$address = "";
$city =  "";
$fname = "";
$lname = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(trim($_POST["email"]))) {
        $email_err = "email can't be blank";
    } else {
        $sql = "SELECT id FROM volunteers WHERE email=?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            // set the value of param email
            $param_email = trim($_POST['email']);
            //execute the statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This email is already taken";
                } else {
                    $email = trim($_POST['email']);
                }
            } else {
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);




    //Password checking

    if (empty(trim($_POST['password']))) {
        $password_err = "password can't be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "password can't be less than 5 characters";
    } else {
        $password = trim($_POST['password']);
    }

    //check for confirm password field

    if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
        $password_err = "passwords need to match";
    }
    if (empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO volunteers (fname,lname,email,password,w_area,city) VALUES (?,?,?,?,?,?)";

        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssss", $param_fname, $param_lname, $param_email, $param_password, $param_address, $param_city);

            //set these parameters

            $fname = $_POST['fname'];
            $param_fname = $fname;
            $lname = $_POST['lname'];
            $param_lname = $lname;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $address = $_POST['address'];
            $param_address = $address;
            $city = $_POST['city'];
            $param_city = $city;
            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
            } else {
                echo "Something went wrong, cant redirect";
            }
            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($conn);
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
</head>

<body>


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

    <div class="card">
        <div class="card-body">
            <div class="jumbotron">

                <div class="container mt-4">
                    <h1>Volunteer Registration</h1>
                    <hr>
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="Monkey">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="lname" class="form-control" name="lname" id="lname" placeholder="D. Luffy">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="MOnkeyDLuffy@gmail.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                            </div>


                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="inputPassword4">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="inputPassword" placeholder="Confirm Password">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="inputAddress2">Address</label>
                                <input type="text" class="form-control" name="address" id="inputAddress" placeholder="House number, road, area">
                            </div>

                            <div class="form-group col-md-7">
                                <label for="inputCity">City</label>
                                <input type="text" id="city" name="city" class="form-control" id="inputCity" placeholder="Dhaka/Chittagong">
                            </div>


                        </div>

                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </form>
                </div>

            </div>

        </div>

    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>