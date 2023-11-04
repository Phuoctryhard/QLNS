<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center; /* Canh giữa theo chiều ngang */
            align-items: center; /* Canh giữa theo chiều dọc */
            height: 100vh; /* Để điều chỉnh vị trí giữa trên toàn màn hình */
            margin: 0; /* Xóa margin mặc định */
            background-color: #f0f0f0; /* Màu nền */
        }

        form {
            background-color: aqua;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div>
        <form action="xulilogin.php" method="POST">
            <div>
                <label for="user">Tên đăng nhập</label>
                <input type="text" id="user" name="username">
            </div>

            <div>
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password">
            </div>

            <div>
                <input type="Submit" value="OKI">
                <input type="Reset" value="Reset">
            </div>
        </form>
    </div>
    <?php
    // PHP code here
    if (isset($_GET['error'])) {
        echo '<p style="color:red;">Đăng nhập thất bại</p>';
    }
    ?>

</body>
</html>
