<?php
    $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));

    // Kiểm tra biến IDPB đã được truyền và xử lý đúng cách
    // 
    if (isset($_REQUEST['IDPB'])) {
        $IDPB = mysqli_real_escape_string($link, $_REQUEST['IDPB']);
        $sql = "SELECT * FROM nhanvien WHERE IDPB = '$IDPB'";
        $db_selected = mysqli_select_db($link, 'dulieu');
        $rs = mysqli_query($link, $sql);
        echo '<table border="1" width="100%">';
        echo '<caption style="text-align:center;">Du lieu tu bang nhan vien</caption>';
        echo '<TR><TH>IDNV</TH><TH>HoTen</TH><TH>IDPB</TH><TH>DiaChi</TH></TR>';
        while ($row = mysqli_fetch_array($rs)) {
            $id = $row["IDNV"];
            $hoten = $row["Hoten"];
            $idpb = $row["IDPB"];
            $diachi = $row["Diachi"];
            echo "<tr> <td>$id</td><td>$hoten</td><td>$idpb</td><td>$diachi</td></tr>";
        }
        echo '</TABLE';
        // Giai phong tap cac ban ghi trong $rs
        mysqli_free_result($rs);
    } else {
        echo "IDPB is not set.";
    }

    mysqli_close($link);
?>
