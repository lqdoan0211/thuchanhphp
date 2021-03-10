<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost','root',"",'lqdoan11dth');
        if (isset($_GET['add'])){
            $malsp = $_GET['maloaisp'];
            $tenlsp = $_GET['tenloaisp'];
            $dgiai = $_GET['diengiai'];
        
        $sql = "insert into loaisanpham (MaLSP, TenLSP, DienGiai) values ('$malsp','$tenlsp','$dgiai')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Thêm cơ sở dữ liệu thành công!";
        } else {
           echo"Thêm cơ sở dữ liệu thất bại!".mysqli_connect_error($conn);
        }
    } 
    ?>
    <?php
        if (isset($_GET['del'])){
            $delmalsp = $_GET['del_maloaisp'];
        $sql = "delete from loaisanpham where MaLSP='$delmalsp'";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Xóa cơ sở dữ liệu thành công!";
        } else {
           echo"Xóa cơ sở dữ liệu thất bại!".mysqli_connect_error($conn);
        }
    } 
    ?>
    <div>
        <form action="" method="get">
            <label for="">Mã loại sản phẩm </label>
            <input type="Text" name="maloaisp" placeholder="Nhập mã loại sản phẩm">
            <label for="">Tên loại sản phẩm </label>
            <input type="Text" name="tenloaisp" placeholder="Nhập tên loại sản phẩm">
            <label for="">Diển giải </label>
            <input type="Text" name="diengiai" placeholder="Nhập diễn giải">
            <input type="submit" name="add" value="Thêm">
            <label for="">Mã loại sản phẩm </label>
            <input type="Text" name="del_maloaisp" placeholder="Nhập mã loại sản phẩm">
            <input type="submit" name="del" value="xóa">
        </form>
    </div>
    <div class="hh">
    <?php
        $conn = mysqli_connect('localhost','root',"",'lqdoan11dth');
        if(! $conn){
            die("Kết nối thất bại: ".mysqli_connect_error());
        }
        $sql = "select * from loaisanpham";
        $result = mysqli_query($conn,$sql);
        while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $data[] = $row;     
        }
        echo "<table border=1 style='border-collapse: collapse'";
        foreach($data as $key =>$value){
            echo "<tr>";
            foreach($value as $key1 => $value1){
                echo "<td> $value1 </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    </div>
    <div>
        <a href="./update.php" target="_blank"><button>Sửa</button></a>
    </div>
</body>
</html>