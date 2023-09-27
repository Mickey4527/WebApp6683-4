<?php
    require_once 'conn.php';
    require_once 'header.php';
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 d-flex align-items-center">
                <a href='index.php'><i class="bi bi-arrow-left-circle" style="font-size:40px;"></i></a>
                <h2 class="ms-4">กรอกไอดีของท่าน เพื่อเช่าหนัง</h2>
            </div>

            <div class="col-12">
                <form id="form1" name="form1" method="post" action="rentsave.php">
                    <p>

                        <label for="pid">รหัสสมาชิก</label>
                        <input class="form-control" type="text" name="pid" id="pid">

                    </p>
                    <p>
                        <label for="movieid">รหัสหนัง</label>

                        <input class="form-control" type="text" name="movieid" id="movieid" value="<?=$_GET['mid'];?>" readonly/>

                    </p>
                    <input type="submit" class="btn btn-success" value="บันทึก">
            </div>
        </div>
    </div>
</body>