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
//Get Grades
$stmt = $conn->query('SELECT studentID, grade FROM grades');
echo "test1";
?>

<table>
    <?php
    //print result of the query
        while ($row = $stmt->fetch())
        {
            echo "<tr>";
            echo "<td>" . $row["studentID"] . "</td>";
            echo "<td>" . $row["grade"] . "</td>";
            echo "</tr>";
        }     
    ?>
</table>
<?php
//Free up space
echo "test2";
//$stmt -> free_result();
echo "test3";
$sql = "INSERT INTO grades (studentID, grade) VALUES (?, ?)";
echo "test4";
$conn->prepare($sql)->execute([68, 21]);

echo "test5";
//close connection
$conn -> close();
?>
