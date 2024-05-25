<?php
session_start();

function gradeToPoint($grade,$cred) {
    $grade = strtoupper($grade); 
    switch ($grade) {
        case 'S': return 10.0*$cred;
        case 'A': return 9.0*$cred;
        case 'B': return 8.0*$cred;
        case 'C': return 7.0*$cred;
        case 'D': return 6.0*$cred;
        case 'E': return 5.0*$cred;
        case 'F': return 0.0*$cred;
        default: return null;
    }
}

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

    $db = $_POST['db'];
    $cn = $_POST['cn'];
    $cd = $_POST['cd'];
    $ai = $_POST['ai'];
    $cp = $_POST['cp'];
    $oe = $_POST['oe'];
    $dbl = $_POST['dbl'];
    $cnl = $_POST['cnl'];

    $dbPoint = gradeToPoint($db,4.0);
    $cnPoint = gradeToPoint($cn,4.0);
    $cdPoint = gradeToPoint($cd,4.0);
    $aiPoint = gradeToPoint($ai,4.0);
    $cpPoint = gradeToPoint($cp,3.0);
    $oePoint = gradeToPoint($oe,3.0);
    $dblPoint = gradeToPoint($dbl,1.5);
    $cnlPoint = gradeToPoint($cnl,1.5);

    $_SESSION['gpa'] = ($dbPoint + $cnPoint + $cdPoint + $aiPoint + $cpPoint + $oePoint + $dblPoint + $cnlPoint) / 25;

    header("Location: output.php");
    exit();
} else {
    echo "Invalid request method.";
}
?>