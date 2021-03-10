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
        mysqli_close($conn);
    ?>
</body>
</html>