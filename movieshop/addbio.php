<?php
    require_once('header.php');
?>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 py-5 d-flex align-items-center">
                <a href='index.php'><i class="bi bi-arrow-left-circle" style="font-size:40px;"></i></a>
                <h2 class="ms-4">เพิ่มสมาชิก</h2>
            </div>
            <div class="col-12 ms-md-5 ps-md-5">
                <form id="form1" name="form1" method="post" action="insertbiosuccess.php">
                <p>

                    <label for="sname">รหัส</label>
                    <input class="form-control" type="text" name="sid" id="sid" >
                </p>
                    <p>

                        <label for="sname">ชื่อ</label>
                        <input class="form-control" type="text" name="sname" id="sname">

                    </p>

                    <p>

                        <label for="slastname">นามสกุล</label>

                        <input class="form-control" type="text" name="slastname" id="slastname">

                    </p>

                    <p>

                        <label for="address">ที่อยู่</label>

                        <input class="form-control" type="text" name="address" id="address">

                    </p>

                    <p>

                        <label for="telephone">เบอร์โทร</label>

                        <input class="form-control" type="text" name="telephone" id="telephone">

                    </p>
                    <input type="submit" class="btn btn-success" value="บันทึก">
                    <a class="btn btn-success" href='mainmenu.php'>Home</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>