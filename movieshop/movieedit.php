<?php
if(!isset($_GET['pid'])){
    header("refresh: 0; url=index.php");
}
require 'conn.php';
$sql = "SELECT * FROM product WHERE product_id='$_GET[pid]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Edit Movie</h1>
            </div>
            <div class="col-12">
                <form id="form1" name="form1" method="post" action="moviesave.php">
                    <p>

                        <label for="pid">รหัส</label>
                        <input class="form-control" type="text" name="pid" id="pid" value="<?=$row['product_id'];?>" disabled readonly>
                        

                    </p>
                    <p>
                        <label for="name">ชื่อหนัง</label>

                        <input class="form-control" type="text" name="name" id="name" value="<?=$row['name'];?>" />

                    </p>

                    <p>

                        <label for="detail">รายละเอียด</label>

                        <input class="form-control" type="text" name="detail" id="detail" value="<?=$row['descrition'];?>" />

                    </p>

                    <p>

                        <label for="actors">นักแสดงที่แสดง</label>

                        <input class="form-control" type="text" name="actors" id="actors" value="" disabled readonly/>

                    </p>

                    <p>

                        <label for="price">ราคา</label>

                        <input class="form-control" type="number" name="price" id="price" value="<?=$row['price'];?>"/>

                    </p>

                    <p>

                        <label for="duration">ระยะเวลา</label>

                        <input class="form-control" type="number" name="duration" id="duration" value="<?=$row['duration'];?>"/>

                    </p>
                    <input type="submit" class="btn btn-success" value="บันทึก">
                    <a class="btn btn-success" href='movie.php'>Home</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>