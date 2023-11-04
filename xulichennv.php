<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$hoten = $_GET["HoTen"];
echo "HoTen: " . $hoten;

$Diachi = $_GET["Diachi"];
echo "Diachi: " . $Diachi;

$IDPB = $_GET["IDPB"];
echo "IDPB: " . $IDPB;

// Kết nối đến cơ sở dữ liệu
$link = mysqli_connect('localhost', 'root', '', 'dulieu') or die('Could not connect: ' . mysqli_error($link));

// Insert data into the nhanvien table using prepared statement
$sql = "INSERT INTO nhanvien (HoTen, IDPB, Diachi) VALUES (?, ?, ?)";

$stmt = mysqli_prepare($link, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sss", $hoten, $IDPB, $Diachi);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Data inserted successfully
        echo "Data inserted successfully!<br>";

        // Select and display all records from nhanvien table
        $rs = mysqli_query($link, "SELECT * FROM nhanvien");

        echo '<table border="1" width="100%">';
        echo '<caption style="text-align:center;">Dữ liệu từ bảng nhân viên</caption>';
        echo '<tr><th>IDNV</th><th>HoTen</th><th>IDPB</th><th>DiaChi</th></tr>';

        while ($row = mysqli_fetch_array($rs)) {
            $id = $row["IDNV"];
            $hoten = $row["Hoten"];
            $idpb = $row["IDPB"];
            $diachi = $row["Diachi"];
            echo "<tr><td>$id</td><td>$hoten</td><td>$idpb</td><td>$diachi</td></tr>";
        }

        echo '</table>';
        mysqli_free_result($rs);
    } else {
        echo "Error executing SQL: " . mysqli_error($link);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing SQL statement: " . mysqli_error($link);
}

// Close the database connection
mysqli_close($link);
?>
    
</body>
</html>
