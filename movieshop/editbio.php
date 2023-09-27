<?php
if(!isset($_GET['sid'])){
    header("refresh: 0; url=mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM member WHERE mid='$_GET[sid]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

require_once 'header.php';

?>

<body class="container">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 py-5 d-flex align-items-center">
                        <a href='movie.php'><i class="bi bi-arrow-left-circle" style="font-size:40px;"></i></a>
                        <h2 class="ms-4">Add movie</h2>
            </div>

            <div class="col-12">
            <form id="form1" name="form1" method="post" action="editsuccess.php">
                <p>

                    <label for="sname">รหัส</label>
                    <input type="text" name="sid" id="sid" value="<?=$row['mid'];?>" readonly>
                    

                </p>
                <p>
                    <label for="slastname">ชื่อ</label>

                    <input type="text" name="sname" id="sname" value="<?=$row['name'];?>" />

                </p>

                <p>

                    <label for="slastname">นามสกุล</label>

                    <input type="text" name="slastname" id="slastname" value="<?=$row['lastname'];?>" />

                </p>

                <p>

                    <label for="address">ที่อยู่</label>

                    <input type="text" name="address" id="address" value="<?=$row['address'];?>"/>

                </p>

                <p>

                    <label for="telephone">เบอร์โทร</label>

                    <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" readonly/>

                </p>
                <input type="submit" class="btn btn-success" value="บันทึก">
            </form>
            </div>
</body>

</html>