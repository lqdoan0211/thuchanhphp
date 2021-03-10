<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost','root',"",'lqdoan11dth');
        if(! $conn){
            die("Kết nối thất bại: ".mysqli_connect_error());
        }
        $sql = "insert into loaisanpham (MaLSP, TenLSP, DienGiai) values ('LSP006','Bộ nguồn máy','Các loại bộ ngồn máy')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Tạo cơ sở dữ liệu thành công!";
        } else {
           echo"Tạo cơ sở dữ liệu thất bại!".mysqli_connect_error($conn);
        }
        mysqli_close($conn);
    ?>
    

</body>
</html>