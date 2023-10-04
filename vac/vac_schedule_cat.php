<?php

$servername = "localhost";
$email = "root";
$password = "";
$dbname = "animal_rescue";

$conn = new mysqli($servername, $email, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM vac_schedule_cat";
$result = $conn->query($sql);

$conn->close();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Vaccine Schedule</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <style>
        table {
            border-collapse: separate;
            border: 1px;
            border-radius: 6px;
            -moz-border-radius: 6px;
        }

        td,
        th {
            border-left: 1px;
            border-top: 1px;
        }

        th {

            border-top: none;
        }

        td:first-child,
        th:first-child {
            border-left: none;
        }
    </style>
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
    <br><br><br><br><br>

    <div class="container">
        <h2><b>Cat Vaccine Schedule</b></h2>
        <!-- Content here -->
        <table class="table table-light table-striped table-hover">
            <thead>
                <th>Cat Vaccine</th>
                <th>Initial Kitten Vaccination (at or under 16 weeks) Initial Adult Cat Vaccination (over 16 weeks) Booster Recommendation Comments</th>
                <th>Initial Adult Cat Vaccination (over 16 weeks)</th>
                <th>Booster Recommendation</th>
                <th>Comments</th>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['Cat_Vaccine'] . '</td>';
                        echo '<td>' . $row['Initial_Kitten_Vaccination'] . '</td>';
                        echo '<td>' . $row['Initial_Adult_Cat_Vaccination'] . '</td>';
                        echo '<td>' . $row['Booster_Recommendation'] . '</td>';
                        echo '<td>' . $row['Comments'] . '</td>';

                        echo '</tr>';
                    }
                } else {
                    echo "no entry found";
                }
                ?>



            </tbody>
        </table>
    </div>


</body>

</html>