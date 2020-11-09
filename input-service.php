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

// $studentID = $_POST["studentID"];
// $grades = $_POST["grades"];
// if (empty($studentID)) {
//     echo "$studentID is empty";
//   } 
// else {
//     echo "$studentID is not empty";
//   }
// if (empty($grades)) {
//     echo "$grades is empty";
//   } 
// else {
//     echo "$studentID is not empty";
// }

echo("Adding grade 23.1 for id 68")
// $sql = "INSERT INTO grades (studentID, grade) VALUES (?, ?)";
// $stmt = $conn->prepare("INSERT INTO grades (studentID, grade) VALUES (68, 23.1)");
// //$stmt->bind_param("id", $studentID, $grades);

// $stmt->execute();

// ?>
