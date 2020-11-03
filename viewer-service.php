
<?php

$cloudhost = "davis-server1.database.windows.net";
$username = "Dwhitlock23";
$password = "tihw_sivad23";
$database = "Grades"; #db I want to connect to. Schema for grades db

$conn = new mysqli($cloudhost, $username, $password, $database)
if ($conn -> connect_errno) {
    die("Failed to connect to MySQL: " . $conn -> connect_error);
}

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
