<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
    $_SESSION['db'] = htmlspecialchars($_POST['db']);
    $_SESSION['cn'] = htmlspecialchars($_POST['cn']);
    $_SESSION['cd'] = htmlspecialchars($_POST['cd']);
    $_SESSION['ai'] = htmlspecialchars($_POST['ai']);
    $_SESSION['cp'] = htmlspecialchars($_POST['cp']);
    $_SESSION['oe'] = htmlspecialchars($_POST['oe']);
    $_SESSION['dbl'] = htmlspecialchars($_POST['dbl']);
    $_SESSION['cnl'] = htmlspecialchars($_POST['cnl']);
    header("Location: output.php");
    exit();


    // echo "<h1 style='color:red; align:center;'>Student Information</h1>";
    // echo "<p style='color:red; align:center;'>Name: " . $name . "<br></p>";
    // echo "<p style='color:red; align:center;'>DBMS Grade: " . $db . "<br></p>";
    // echo "<p style='color:red; align:center;'>Computer Netwoks Grade: " . $cn . "<br></p>";
    // echo "<p style='color:red; align:center;'>Compiler Design Grade: " . $cd . "<br></p>";
    // echo "<p style='color:red; align:center;'>Artifical Intelligence Grade: " . $ai . "<br></p>";

    // $servername = "localhost";
    // $username = "root";
    // $password = "MySQL@123";
    // $dbname = "web_2";

    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // // Prepare and bind
    // $stmt = $conn->prepare("INSERT INTO demo (dbms, cn, cd,ai,name) VALUES (?, ?, ?, ?,?)");
    // $stmt->bind_param("sssss",$db, $cn, $cd,$ai, $name);

    // // Execute the statement
    // if ($stmt->execute()) {
    //     // echo "<h1>Student Information</h1>";
    //     // echo "Name: " . $name . "<br>";
    //     // echo "DBMS Grade: " . $db . "<br>";
    //     // echo "Computer Netwoks Grade: " . $cn . "<br>";
    //     // echo "Compiler Design Grade: " . $cd . "<br>";
    //     // echo "Artifical Intelligence Grade: " . $ai . "<br>";

    //     $sql = "SELECT name,dbms, cn, cd, ai FROM demo";
    //     $result = $conn->query($sql);

    //     if ($result->num_rows > 0) {
    //         echo "<h1>Student Information</h1>";
    //         echo "<table border='1'>";
    //         echo "<tr><th>Name</th><th>DBMS Grade</th><th>Computer Networks Grade</th><th>Compiler Design Grade</th><th>Artifical Intelligence Grade</th></tr>";
            
    //         // Output data of each row
    //         while($row = $result->fetch_assoc()) {
    //             echo "<tr>";
    //             echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
    //             echo "<td>" . htmlspecialchars($row["dbms"]) . "</td>";
    //             echo "<td>" . htmlspecialchars($row["cn"]) . "</td>";
    //             echo "<td>" . htmlspecialchars($row["cd"]) . "</td>";
    //             echo "<td>" . htmlspecialchars($row["ai"]) . "</td>";
    //             echo "</tr>";
    //         }
            
    //         echo "</table>";
    //     }
    // } else {
    //     echo "Error: " . $stmt->error;
    // }

    // // Close the statement and connection
    // $stmt->close();
    // $conn->close();
} else {
    echo "Invalid request method.";
}
?>