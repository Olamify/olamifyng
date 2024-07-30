<?php



    // define variables and set to empty values
$emaill = $pswl = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $emaill = $_POST["emaill"];
  $pswl = $_POST["pswl"];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olamify";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$pswl2 = md5($pswl);
$sqll = "SELECT * FROM users WHERE email = '$emaill' AND password = '$pswl2'";
$resultl = mysqli_query($conn, $sqll);

if (mysqli_num_rows($resultl) > 0) {
    session_start();
        // Set session variables
    while($row = $resultl->fetch_assoc()) {
        $_SESSION["uname"] = $row["name"];
    }
    $_SESSION["LOGGED_IN"] = true;
    $_SESSION["pswmd5"] = "$pswl2";
    $_SESSION["email"] = "$emaill";
    header('location: home/index.php');
} else {
    if ($_SERVER['PHP_SELF'] == "/serverlogin.php"){
        echo "<style>body{background:#112233;color:white;}</style><h1>Account not Found or <code>Credentials does not match our DataBase</code></h1>"; 
    }
   
}

mysqli_close($conn);

?>