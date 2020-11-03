<?php


// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:davis-server1.database.windows.net,1433; Database = Grades", "Dwhitlock23", "tihw_sivad23");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Dwhitlock23", "pwd" => "{tihw_sivad23}", "Database" => "Grades", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:davis-server1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);




// $cloudhost = "...azure.net";
// $username = "un";
// $password = "pw";
// $database = "gradesDB"; #db I want to connect to. Schema for grades db

// $conn = new mysqli($cloudhost, $username, $password, $database)
// if ($conn -> connect_errno) {
//     die("Failed to connect to MySQL: " . $conn -> connect_error);
// }

$studentID = $_POST("studentID");
$grades = $_POST("grades");

$stmt = $conn->prepare("INSERT INTO gradesTable (studentID, grades) VALUES (?, ?)");
$stmt->bind_param("di",$studentID, $grades);

$stmt->execute();
?>
