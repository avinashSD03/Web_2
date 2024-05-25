<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "MySQL@123";
$dbname = "web_2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, dbms, cn, cd, ai, cp, oe, dbl, cnl, gpa FROM student";
$result = $conn->query($sql);

$table_html = "<h1>Student Details from Database</h1>";
$table_html .= "<table border='1'>";
$table_html .= "<tr><th>Name</th><th>DBMS</th><th>Computer Networks</th><th>Compiler Design</th><th>Artificial Intelligence</th><th>Cryptography</th><th>Open Elective</th><th>DBMS Lab</th><th>CN Lab</th><th>GPA</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $table_html .= "<tr>";
        $table_html .= "<td>" . htmlspecialchars($row["name"]) . "</td>";
        $table_html .= "<td>" . htmlspecialchars($row["dbms"]) . "</td>";
        $table_html .= "<td>" . htmlspecialchars($row["cn"]) . "</td>";
        $table_html .= "<td>" . htmlspecialchars($row["cd"]) . "</td>";
        $table_html .= "<td>" . htmlspecialchars($row["ai"]) . "</td>";
        $table_html .= "<td>" . htmlspecialchars($row["cp"]) . "</td>";
        $table_html .= "<td>" . htmlspecialchars($row["oe"]) . "</td>";
        $table_html .= "<td>" . htmlspecialchars($row["dbl"]) . "</td>";
        $table_html .= "<td>" . htmlspecialchars($row["cnl"]) . "</td>";
        $table_html .= "<td>" . htmlspecialchars($row["gpa"]) . "</td>";
        $table_html .= "</tr>";
    }
}

$table_html .= "</table>";
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades Form</title>
    <style>
        body{
            background-color: #a798fd;
            display:flex; 
            flex-direction:column; 
            justify-content:center;
        }
        .outer{
            display: flex;
            flex-direction: column;
            width: 40%;
            padding: 2rem 4rem;
            margin: 2rem auto;
            background-color: white;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;            
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; color: white;">Task 3</h1>
    <div class="outer">
        <div id="res"></div>
    </div>

    <script>
        document.getElementById('res').innerHTML = `<?php echo $table_html; ?>`;
    </script>
</body>
</html>
