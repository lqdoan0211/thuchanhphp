<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
        $conn = mysqli_connect('localhost','root',"",'lqdoan11dth');
        if (isset($_POST['upd'])){
            $malsp = $_POST['maloaisp'];
            $tenlsp = $_POST['tenloaisp'];
            $dgiai = $_POST['diengiai'];
        
        $sql = "update loaisanpham set MaLSP ='$malsp', TenLSP='$tenlsp', DienGiai='$dgiai' where MaLSP='$malsp'";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Cập nhật cơ sở dữ liệu thành công!";
        } else {
           echo"Cập nhât cơ sở dữ liệu thất bại!".mysqli_connect_error($conn);
        }
    } 
    ?>
    <div>
        <form action="" method="post">
            <label for="">Mã loại sản phẩm </label>
            <input type="Text" name="maloaisp" placeholder="Nhập mã loại sản phẩm">
            <label for="">Tên loại sản phẩm </label>
            <input type="Text" name="tenloaisp" placeholder="Nhập tên loại sản phẩm">
            <label for="">Diển giải </label>
            <input type="Text" name="diengiai" placeholder="Nhập diễn giải">
            <input type="submit" name="upd" value="Cập nhật">
        </form>
    </div>
</body>
</html>