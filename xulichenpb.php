<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dulieu";

// Create connection
$conn = mysqli_connect($servername, $username, $password) or die("Connection failed: " . mysqli_error($link));
mysqli_select_db($conn, $dbname);
$IDPB = $_POST['IDPB'];
$TenPB = $_POST['TenPB'];
$MoTa = $_POST['MoTa'];

$sql = "INSERT INTO phongban (IDPB, Tenpb, Mota) VALUES ('$IDPB', '$TenPB', '$MoTa')";

mysqli_query($conn, $sql);
$conn->close();
header('Location:chenpb.php');
exit();
?>