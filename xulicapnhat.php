// lấy ra thông tin 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dulieu";

// Create connection
$conn = mysqli_connect($servername, $username, $password) or die("Connection failed: " . mysqli_error($link));
mysqli_select_db($conn, $dbname);
    $IDPB = $_REQUEST["IDPB"];
    $TenPB = $_REQUEST["TenPB"];
    $Mota = $_REQUEST["MoTa"];

    $sql = "UPDATE phongban SET IDPB='$IDPB',Tenpb='$TenPB', MoTa='$Mota' WHERE IDPB='$IDPB'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location:capnhat.php');
    exit();



?>