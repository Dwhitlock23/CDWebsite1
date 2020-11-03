<?php

$cloudhost = "...azure.net";
$username = "un";
$password = "pw";
$database = "gradesDB"; #db I want to connect to. Schema for grades db

$conn = new mysqli($cloudhost, $username, $password, $database)
if ($conn -> connect_errno) {
    die("Failed to connect to MySQL: " . $conn -> connect_error);
}

$studentID = $_POST("studentID");
$grades = $_POST("grades");

$stmt = $conn->prepare("INSERT INTO gradesTable (studentID, grades) VALUES (?, ?)");
$stmt->bind_param("di",$studentID, $grades);

?>