<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dulieu";

$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_error($link));
$sql = "SELECT * FROM phongban ";
$result= mysqli_query($conn,$sql);
echo "
<table>
<tr>
<th>IDPB</th> 
<th>Tenpb</th> 
<th>Mota</th> 
<th>Cập nhật</th> 
</tr>
";
while($row=mysqli_fetch_array($result)){
    echo " 
      <tr> 
          <td>".$row[0]."</td>
          <td>".$row[1]."</td>
          <td>".$row[2]."</td>
          <td><a href ='form_capnhat.php?IDPB=".$row[0]."'>" .$row[0]."</td>
      <tr>
    ";
    
}

echo "</table>";
mysqli_close($conn);


?>
    
</body>
</html>

