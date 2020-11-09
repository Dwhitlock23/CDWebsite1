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

// echo ("StudentID: " );
// echo ("Grade: ");
// echo("Adding grade")
// $sql = "INSERT INTO grades (studentID, grade) VALUES (?, ?)";
// $conn->prepare($sql)->execute([65, 31]);
//$stmt = $conn->prepare($sql);
//$stmt->execute([68, 21]);
// $stmt = $link->prepare('INSERT INTO testtable (name, lastname, age)
//     VALUES (:fname, :sname, :age)');

// $statement->execute([
//     'fname' => 'Bob',
//     'sname' => 'Desaunois',
//     'age' => '18',
// ]);
?>
