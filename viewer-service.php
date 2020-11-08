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
// // SQL Server Extension Sample Code:
// $connectionInfo = array("UID" => "Dwhitlock23", "pwd" => "{tihw_sivad23}", "Database" => "Grades", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
// $serverName = "tcp:davis-server1.database.windows.net,1433";
// $conn = sqlsrv_connect($serverName, $connectionInfo);
//Get Grades
echo("Before query");
if ($result = $conn -> query("SELECT studentID, grade FROM grades")){
    echo("After query1");
?>
<table>
    <?php
        while($row = $result-> fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["studentID"] . "</td>";
            echo "<td>" . $row["grade"] . "</td>";
            echo "</tr>";
        }
        echo("After query2");
    ?>
</table>
<?php
    //Free up space
    $result -> free_result();
}
//close connection
$conn -> close();
?>
