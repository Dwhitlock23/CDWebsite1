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



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input fields
    $studentID = $_POST['studentID'];
    $grades = $_POST['grades'];
    // debug messages:
    if (empty($studentID)) {
        echo "studentID is empty";
    } 
    else {
        echo $studentID;
    }
    if (empty($grades)) {
        echo "grades is empty";
    } 
    else {
        echo $grades;
    }
}



$sql = "INSERT INTO grades (studentID, grade) VALUES (?, ?)";
$conn->prepare($sql)->execute([$studentID, $grades]);
//close connection
$conn -> close();
?>
