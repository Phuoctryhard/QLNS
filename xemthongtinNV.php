<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $link = mysqli_connect('localhost','root','') or die ('Could not connect: ');

    $db_selected = mysqli_select_db($link,'dulieu');

    $rs = mysqli_query($link,"SELECT * from nhanvien");

    echo '<table border="1" width="100%">';
    echo '<caption style="text-align:center;">Du lieu tu bang nhan vien</caption>';

    echo '<TR><TH>IDNV</TH><TH>HoTen</TH><TH>IDPB</TH><TH>DiaChi</TH></TR>';
    
    while ( $row = mysqli_fetch_array($rs)){
        $id = $row["IDNV"];
        $hoten = $row["Hoten"];
        $idpb = $row["IDPB"];
        $diachi = $row["Diachi"];
        echo "<tr> <td>$id</td><td>$hoten</td><td>$idpb</td><td>$diachi</td></tr>";
    }
    echo '</TABLE>';
    //Giai phong tap cac ban ghi trong $rs
    mysqli_free_result ($rs);
    mysqli_close($link);

?>
</body>
</html>