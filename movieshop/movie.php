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
        <?php
            require_once 'navbar.php';
        ?>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 p-5 bg-body-secondary">
                    <h2>สินค้า</h2>
                </div>
                <div class="col-12 mt-5">
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                           $output = "<div class='col-3'>";
                            $output .= "<div class='card'>";
                            $output .= "<img src='assets/".$row["pic_movie"]."' class='card-img-top'>";
                            $output .= "<div class='card-body'>";
                            $output .= "<h5 class='card-title fw-bold'>".$row["name"]."</h5>";
                            $output .= "<p class='small card-text text-body-tertiary'>".$row["descrition"]."</p>";
                            $output .= "<a href='rent.php?pid=".$row["product_id"]."' class='btn btn-primary'>เช่า ".$row["price"]." บาท</a>";
                            $output .= "<a href='moviedetail.php?pid=".$row["product_id"]."' class='btn btn-light'>รายละเอียด</a>";
                            $output .= "<a href='movieedit.php?pid=".$row["product_id"]."' class='btn btn-light'>แก้ไขหนัง</a>";
                            $output .= "</div>";
                            $output .= "</div>";
                            $output .= "</div>";
                            echo $output;
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>
        </div>
