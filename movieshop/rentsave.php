<?php
    require_once 'conn.php';
    require_once 'header.php';
    if($sql = "SELECT * FROM member_rent WHERE mid = '".$_POST['pid']."' AND movie_id = '".$_POST['movieid']."'"){
        $result = $conn->query($sql);
        if(!$result){
            die("Error : ". $conn->$conn_error);
        }
        if ($result->num_rows > 0) {
            echo "<script>alert('มีรายการเช่าหนังนี้อยู่แล้ว');
            window.location.href='index.php';</script>";
            exit();
        }
    }
    $sql = "INSERT INTO member_rent (mid, movie_id,start_date,end_date) VALUES ( '".$_POST['pid']."' ,'".$_POST['movieid']."',NOW(),NOW()+INTERVAL 7 DAY)";
    if($conn->query($sql)){
        echo "<script>alert('Record updated successfully');</script>";
    }else{
        echo "Error updating record : ".$conn->error;
    }
    $conn->close();
    echo "<a href='index.php'>กลับหน้าหลัก</a>";
?>