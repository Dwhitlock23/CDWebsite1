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

$studentID = $_POST["studentID"];
$grades = $_POST["grades"];

echo $studentID;
echo $grades;
// $sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
// $stmt= $pdo->prepare($sql);
// $stmt->execute([$name, $surname, $sex]);
echo("Adding grade 21 for id 68")
// $sql = "INSERT INTO grades (studentID, grade) VALUES (?, ?)";
// $stmt = $conn->prepare($sql);
// $stmt->execute([68, 21]);

?>
