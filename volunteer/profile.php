<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <?php
    include("config.php");
    session_start();
    $email = $_SESSION['email'];
    $result = mysqli_query($conn, "SELECT id,fname,lname,email,w_area,city,date_created from volunteers where email='$email'");
    $retrieve = mysqli_fetch_array($result);
    // print_r($retrieve);
    $id = $retrieve['id'];
    $fname = $retrieve['fname'];
    $lname = $retrieve['lname'];

    $w_area = $retrieve['w_area'];
    $city = $retrieve['city'];
    $date_created = $retrieve['date_created'];
    ?>



    <title>Volunteer's Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
                        <a class="nav-link" href="show-volunteer.php">Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="thanks.php">Thanks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <class class="container">
        <h2 align="center">Welcome <?php echo $fname . " " . $lname ?></h2>
    </class>
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!--
                <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?php echo $fname . " " . $lname ?></h4>
                                    <p class="text-secondary mb-1">Volunteer</p>
                                    <p class="text-muted font-size-sm"><?php echo $w_area ?> , <?php echo $city ?></p>

                                </div>
                            </div>
                        </div>
                    </div> 
                    -->

        </div>
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $fname . " " . $lname ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $email ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Area</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $w_area ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">City</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $city ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Date joined</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $date_created ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>




</body>

</html>