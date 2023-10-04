<?php

$servername="localhost";
$email="root";$password="";
$dbname="animal_rescue";

$conn=new mysqli($servername,$email,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
