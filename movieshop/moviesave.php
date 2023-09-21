<?php
    require_once('conn.php');
   $sql = "UPDATE product SET name = '".$_POST['name']."', descrition = '".$_POST['detail']."', price = '".$_POST['price']."' WHERE product_id = '".$_POST['pid']."'";
    if($conn->query($sql) === TRUE){
        echo "<script>alert('Record updated successfully');</script>";
    }else{
        echo "Error updating record : ".$conn->error;
    }
    $conn->close();
    echo "<a href='movie.php'>กลับหน้าหลัก</a>";
?>