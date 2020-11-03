<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:davis-server1.database.windows.net,1433; Database = Grades", "Dwhitlock23", "{tihw_sivad23}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

$studentID = $_POST("studentID");
$grades = $_POST("grades");

$stmt = $conn->prepare("INSERT INTO gradesTable (studentID, grade) VALUES (?, ?)");
$stmt->bind_param("id",$studentID, $grades);

$stmt->execute();
?>
