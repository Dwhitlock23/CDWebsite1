$cloudhost = "davis-server1.database.windows.net";
$username = "Dwhitlock23";
$password = "tihw_sivad23";
$database = "Grades"; #db I want to connect to. Schema for grades db

$conn = new mysqli($cloudhost, $username, $password, $database)
if ($conn -> connect_errno) {
    die("Failed to connect to MySQL: " . $conn -> connect_error);
}

$studentID = $_POST("studentID");
$grades = $_POST("grades");

$stmt = $conn->prepare("INSERT INTO gradesTable (studentID, grade) VALUES (?, ?)");
$stmt->bind_param("id",$studentID, $grades);

$stmt->execute();
?>
