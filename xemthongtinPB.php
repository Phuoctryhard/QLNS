
    
<?php
    $link = mysqli_connect('localhost','root','') or die ('Could not connect: ');

    $db_selected = mysqli_select_db($link,'dulieu');

    $rs = mysqli_query($link,"SELECT * from phongban");

    echo '<table border="1" width="100%">';
    echo '<caption style="text-align:center;">Du lieu tu bang phong ban</caption>';

    echo '<TR><TH>IDPB</TH><TH>Tenpb</TH><TH>Mota</TH> <TH>Xem Thong Tin Phong Ban</TH></TR>';
    
    while ( $row = mysqli_fetch_array($rs)){
        echo "<tr>
         <td>".$row["IDPB"]."</td>
         <td>".$row["Tenpb"]."</td>
         <td>".$row["Mota"]."</td>
          <td><a href='xemthongtinNVPB.php?IDPB=".$row["IDPB"]."'>".$row["IDPB"]."</a></td> 
        </tr>";
    }
    echo '</table>';
    //Giai phong tap cac ban ghi trong $rs
    mysqli_free_result ($rs);
    mysqli_close($link);

?>
<!-- <td><a href='xemthongtinNVPB.php?IDPB=".$row["IDPB"]."'>".$row["IDPB"]."</a></td> -->