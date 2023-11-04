<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ');

$db_selected = mysqli_select_db($link, 'dulieu');

// Kiểm tra nút "Xoá" đã được nhấn
//Khi bạn gửi dữ liệu từ một biểu mẫu HTML bằng phương thức POST, các giá trị của các ô checkbox sẽ được gửi đến máy chủ và lưu trong mảng $_POST. 
if (isset($_POST['delete'])) {
    // Duyệt qua các checkbox
    foreach ($_POST['delete_checkbox'] as $i) {
        // Thực hiện truy vấn DELETE để xoá các bản ghi dựa trên IDNV
        // $i = mysqli_real_escape_string($link, $i);
        $delete_query = "DELETE FROM nhanvien WHERE IDNV = '$i'";
        mysqli_query($link, $delete_query);
    }
}

$rs = mysqli_query($link, "SELECT * from nhanvien");
echo '<form method="POST" action="">';
echo '<table border="1" width="100%">';
echo '<caption style="text-align:center;">Du lieu tu bang nhan vien</caption>';
echo '<TR><TH>IDNV</TH><TH>HoTen</TH><TH>IDPB</TH><TH>DiaChi</TH> <Th>XoaNhanVien</Th></TR>';
while ($row = mysqli_fetch_array($rs)) {
    echo "<tr>
        <td>".$row["IDNV"]."</td>
        <td>".$row["Hoten"]."</td>
        <td>".$row["IDPB"]."</td>
        <td>".$row["Diachi"]."</td>
        
        <td><input type='checkbox' name='delete_checkbox[]' value='".$row["IDNV"]."' /></td>
    </tr>";
}

echo '</TABLE>';
echo '<button type="submit" name="delete">Xoá</button>';
echo '</form>';

mysqli_free_result($rs);
mysqli_close($link);
?>

<!--   <td><input type='checkbox' name='delete_checkbox[]' value='".$row["IDNV"]."' /></td> : 1 mảng checkbox đẫ nhập -->