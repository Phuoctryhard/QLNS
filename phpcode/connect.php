<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Dịch vụ</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Liên hệ</a></li>
        </ul>

        <input type="radio" name="myRadio" id="radio1" checked>
<label for="radio1">Nút radio đã được chọn mặc định</label>
<br>
<input type="radio" name="myRadio" id="radio2">
<label for="radio2">Nút radio không được chọn mặc định</label>
    </nav>



    <form>
    <label for="fruits">Chọn một loại trái cây:</label>
    <select id="fruits" name="fruit">
        <option value="apple">Táo</option>
        <option value="banana">Chuối</option>
        <option value="orange">Cam</option>
        <option value="grape">Nho</option>
        <option value="strawberry">Dâu tây</option>
    </select>
    <input type="button" value="Lấy giá trị" onclick="getSelectedValue()">
</form>

<script>
    function getSelectedValue() {
        // Lấy phần tử select bằng id
        var selectElement = document.getElementById("fruits");

        // Lấy giá trị của phần tử được chọn
        var selectedValue = selectElement.selectedIndex;

        // Hiển thị giá trị trong cửa sổ cảnh báo (alert)
        alert("Giá trị đã chọn: " + selectElement.options[selectedValue].value);
        console.log(selectElement.length);
    }


    // đối tượng người dùng tự định nghĩa 
    function book (title, name ){
        this.title =title;
        this.name = name;
    }
    var Book = new book("Anh yeu em", "Ngô Đình Phước ");
    alert(Book.title +" "+ Book.name );
</script>

    <?php
    echo"anh yeu em";
    $a = 1; $b = 2 ; $c = 3;
    echo "$a$b$c<br>";
    
    // Array 
    $array = Array(1,2,3);
    foreach($array as $value){
        echo $value;
    }
    $array1 = Array(
        "a" =>1,
        "b" =>5,
        "c" =>8
    );
    
    echo "\n".$array1["b"]. "\n";


    // 2 cach duyet mang 
    $array2 = Array(
        "a" => 5,
        "b"=> 6,
        "c" => 7
    );

    $keys = array_keys($array2);
    $lastKey = end($keys);
    foreach($array2 as $key => $value){
        // lấy ra key cuối cùng 
        // array_keys : lấy ra all keyss từ mảng 
        echo "$key","=","$value";
        if($key !== $lastKey){
            echo ",";
        }
    }
    ?>
</body>
</html>
