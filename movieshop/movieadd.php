<?php
    require 'conn.php';
    $sql = "SELECT product_id FROM product";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
?>
<?php require_once 'header.php'; ?>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 py-5 d-flex align-items-center">
                <a href='movie.php'><i class="bi bi-arrow-left-circle" style="font-size:40px;"></i></a>
                <h2 class="ms-4">Add movie</h2>
            </div>
            <div class="col-12 ms-md-5 ps-md-5">
                <form id="form1" name="form1" method="post" action="moviesave.php">
                    <p>

                        <label for="pid">รหัส</label>
                        <input class="form-control" type="text" name="pid" id="pid">
                        

                    </p>
                    <p>
                        <label for="name">ชื่อหนัง</label>

                        <input class="form-control" type="text" name="name" id="name" />

                    </p>

                    <p>

                        <label for="detail">รายละเอียด</label>

                        <input class="form-control" type="text" name="detail" id="detail" />

                    </p>

                    <p>

                        <label for="actors">นักแสดงที่แสดง</label>

                        <input class="form-control" type="text" name="actors" id="actors" value="" disabled readonly/>

                    </p>

                    <p>

                        <label for="price">ราคา</label>

                        <input class="form-control" type="number" name="price" id="price" />

                    </p>

                    <p>

                        <label for="duration">ระยะเวลา</label>

                        <input class="form-control" type="number" name="duration" id="duration"/>

                    </p>
                    <input type="submit" class="btn btn-success" value="บันทึก">
                </form>
            </div>
        </div>
    </div>
</body>

</html>