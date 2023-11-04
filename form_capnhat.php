<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dulieu";

    // du lieu lay ve 
    $idpb = $_REQUEST["IDPB"];
    $conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_error($link));
    $sql = "SELECT * FROM phongban WHERE IDPB = '$idpb'";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
?>
<form action="xulicapnhat.php" method="post">
            <!-- <input type="hidden" id="IDPBGOC" name="IDPBGOC" value="<?php echo $row['IDPB']; ?>"> -->
            <label for="IDPB">IDPB:</label>
            <input type="text" id="IDPB" name="IDPB" value="<?php echo $row['IDPB']; ?>" readonly><br>
            <label for="TenPB">TenPB:</label>
            <input type="text" id="TenPB" name="TenPB" value="<?php echo $row['Tenpb']; ?>"><br>
            <label for="MoTa">MoTa:</label>
            <input type="text" id="MoTa" name="MoTa" value="<?php echo $row['Mota']; ?>"><br>
            <input type="submit" value="OK">
        </form>
        <a href="capnhat.php">Cancel</a>
    
</body>
</html>