<?php
// PHP Data Objects(PDO) Sample Code:
echo("Before connection");
try {
    $conn = new PDO("sqlsrv:server = tcp:davis-server1.database.windows.net,1433; Database = Grades", "Dwhitlock23", "{tihw_sivad23}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
// // SQL Server Extension Sample Code:
// $connectionInfo = array("UID" => "Dwhitlock23", "pwd" => "{tihw_sivad23}", "Database" => "Grades", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
// $serverName = "tcp:davis-server1.database.windows.net,1433";
// $conn = sqlsrv_connect($serverName, $connectionInfo);
//Get Grades
echo("Before query"); 

foreach ($conn->("SELECT studentID, grade FROM grades") as $row) {
    print $row['studentID'] . "\t";
    print $row['grades'] . "\n";
    }

   

}
//close connection
$conn -> close();
?>
