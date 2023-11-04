<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Retrieve the search results from URL parameters
    $searchType = $_GET["searchType"];
    $searchInput = $_GET["searchInput"];
    // Display the search results
    echo "<h2>Search Results:</h2>";
    echo "Search Type: " . $searchType . "<br>";
    echo "Search Input: " . $searchInput . "<br>";
    // Kết nối đến cơ sở dữ liệu
    $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
    $db_selected = mysqli_select_db($link,'dulieu');
    $sql = "SELECT * FROM nhanvien WHERE $searchType = '$searchInput'";
    $rs = mysqli_query($link,$sql);
    echo '<table border="1" width="100%">';
    echo '<caption style="text-align:center;">Du lieu tìm kiếm nhân viên theo radio button</caption>';
    echo '<TR><TH>IDNV</TH> <TH>HoTen</TH> <TH>IDPB</TH> <TH>DiaChi</TH></TR>';
    while ( $row = mysqli_fetch_array($rs)){
        echo "<tr>
         <td>".$row["IDNV"]."</td>
         <td>".$row["Hoten"]."</td>
         <td>".$row["IDPB"]."</td>
         <td>".$row["Diachi"]."</td>
        </tr>";
    }
    echo '</table>';
    //Giai phong tap cac ban ghi trong $rs
    mysqli_free_result ($rs);
    mysqli_close($link);
    // Đóng kết nối cơ sở dữ liệu
    ?>
</body>
</html>
