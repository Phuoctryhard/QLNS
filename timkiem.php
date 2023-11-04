<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the search type and input
        $searchType = $_POST["search_type"];
        $searchInput = $_POST["search_input"];
        // Perform the search based on the selected search type
        if ($searchType == "IDNV") {    
            // Search by IDNV
            // Perform your search logic here
        } elseif ($searchType == "HoTen") {
            // Search by Họ tên
            // Perform your search logic here
        } elseif ($searchType == "DiaChi") {
            // Search by Địa chỉ
            // Perform your search logic here
        } 
        // You can display the search results here or redirect to another page.
        echo "<h2>Search Results:</h2>";
        echo "Search Type: " . $searchType . "<br>";
        echo "Search Input: " . $searchInput . "<br>";
        header("Location: xulitimkiem.php?searchType=$searchType&searchInput=$searchInput");
    }
    ?>
    <form action="" method="post">
        <input type="radio" name="search_type" id="IDNV" value="IDNV">
        
        <label for="idnv">IDNV</label>
        <input type="radio" name="search_type" id="HoTen" value="HoTen">
        <label for="hoten">Họ tên</label>
        
        <input type="radio" name="search_type" id="DiaChi" value="DiaChi">
        <label for="diachi">Địa chỉ</label>
        
        
        <div>
            <input type="text" id="search_input" name="search_input">
        </div>
        
        <input type="submit" value="Search">
    </form>
</body>
</html>
