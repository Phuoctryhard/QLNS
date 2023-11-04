<?php

// echo "'$user'.'$password'";
// truy vấn  db 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dulieu";
$conn = new mysqli($servername, $username, $password,$dbname) or die("Connection failed: " . mysqli_error($link));
$user = $_REQUEST["username"];
$password = $_REQUEST["password"];
// do chọn cơ so dl ở trên nên ko cần mysqli_select_db($conn, $dbname);
// $kq ="SELECT * FROM admin WHERE  Username ='$user' AND password = '$password'";
$kq = "SELECT * FROM admin  WHERE Username ='$user' AND password ='$password'";
$result = mysqli_query($conn, $kq);
if (mysqli_num_rows($result)>0) {
    // Xử lý khi đăng nhập thành công
    header('Location: trangchu.php');
    $conn->close();
    exit();
} else {
    // Xử lý khi đăng nhập thất bại
    header('Location: login.php?error=1');
    $conn->close();
    exit();
}
?>