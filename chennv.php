<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <label for="HoTen">Họ Tên</label>
    <input type="text" name="HoTen" value="">
    <label for="IDPB">IDPB</label>
    <input type="text" name="IDPB" id="IDPB" value="">
    <label for="Diachi">Địa Chỉ</label>
    <input type="text" name="Diachi" id="Diachi" value="">
    <input type="submit" value="Search">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form has been submitted

    $hoten = $_POST['HoTen'];
    $IDPB = $_POST['IDPB'];
    $Diachi = $_POST['Diachi'];

    // Check if any of the form fields are empty
    if (empty($hoten) || empty($IDPB) || empty($Diachi)) {
        echo "Please fill in all the fields.";
    } else {
        // All fields are filled, display the values and redirect
        echo "Ho Ten: " . $hoten;
        echo " Dia Chi: " . $Diachi;
        echo " IDPB: " . $IDPB;

        // Clear the form fields by resetting their values to empty strings
        echo "<script>
                document.getElementsByName('HoTen')[0].value = '';
                document.getElementsByName('IDPB')[0].value = '';
                document.getElementsByName('Diachi')[0].value = '';
              </script>";

        // Redirect with the data as URL parameters
        header("Location: xulichennv.php?HoTen=$hoten&IDPB=$IDPB&Diachi=$Diachi");
    }
}
?>
    
</body>
</html>
