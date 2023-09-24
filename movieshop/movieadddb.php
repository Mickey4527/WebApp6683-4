<?php
    require_once('conn.php');
    $sql = "INSERT INTO product (product_id, name, descrition, price) VALUES ('".$_POST['pid']."', '".$_POST['name']."', '".$_POST['detail']."', '".$_POST['price']."')";

    if($conn->query($sql)){
        echo "<script>alert('Record updated successfully');</script>";
    }else{
        echo "Error updating record : ".$conn->error;
    }
    $conn->close();
    echo "<a href='movie.php'>กลับหน้าหลัก</a>";
?>