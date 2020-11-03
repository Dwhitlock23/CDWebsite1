<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:davis-server1.database.windows.net,1433; Database = Grades", "Dwhitlock23", "{tihw_sivad2}");
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
if ($result = $conn -> query("SELECT studentID, grades FROM gradesTable")){
?>
<table>
    <?php
        while($row = $result-> fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["studentID"] . "</td>";
            echo "<td>" . $row["grade"] . "</td>";
            echo "</tr>";
        }
    ?>
</table>
<?php
    //Free up space
    $result -> free_result();
}

//close connection
$conn -> close();
?>
