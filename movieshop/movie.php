<?php
    require_once 'conn.php';
    require_once 'header.php';
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }

    function getMovieActor($conn,$movie_id){
        $sql = "SELECT * FROM actors actor JOIN movie_actors movie_act ON actor.actorid = movie_act.actor_id WHERE movie_id = ".$movie_id;
        $result = $conn->query($sql);

        return $result;
    }

    function loopActor($conn,$movie_id){
        $result = getMovieActor($conn,$movie_id);
        $output = null;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $output .= "<span class='badge bg-mix-dark-1'>".$row["name"]." ".$row["lastname"]."</span>";
            }
        }else {
            $output = "0 results";
        }
        return $output;
    }
?>
    <body class="bg-mix-blue">
        <?php
            require_once 'navbar.php';
        ?>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 p-md-5">
                    <h2 class="fw-bold">สินค้า</h2>
                </div>
                <div class="col-12 mt-5 p-md-5">
                    <div class="row">
                        <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                $output = "<div class='col-md-3'>";
                                    $output .= "<div class='card bg-mix-dark-1'>";
                                    $output .= "<img src='assets/".$row["pic_movie"]."' class='card-img-top'>";
                                    $output .= "<div class='card-body'>";
                                    $output .= "<h5 class='card-title fw-bold'>".$row["name"]."</h5>";
                                    $output .= "<p class='small card-text'>".$row["descrition"]."</p>";
                                     $output .= '<small class="pe-3">นักแสดง</small>'.loopActor($conn,$row["product_id"]);
                                    $output .= "<div class='d-flex flex-column'>";
                                    $output .= "<a href='rent.php?mid=".$row["product_id"]."' class='btn btn-primary mb-2 mt-3'>เช่า ".$row["price"]." บาท</a>";
                                    $output .= "<a href='movieedit.php?pid=".$row["product_id"]."' class='btn btn-light'>แก้ไขหนัง</a>";
                                    $output .= "</div>";
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
                        <div class="col-md-3">
                            <a href="movieadd.php">
                                <div class="card bg-mix-dark-1 d-flex justify-content-center align-items-center" style="height: 642px;">
                                    <i class="bi bi-plus-circle-fill" style="font-size:64px;"></i>
                                    <h4 class="fw-bold">เพิ่มหนัง</h4>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </body>
