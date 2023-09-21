<?php
    require_once 'conn.php';
    require_once 'header.php';
    $sql = "SELECT * FROM member";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>

<body>
    <?php
        require_once 'navbar.php';
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 p-5 bg-body-secondary">
                <h2>สมาชิก</h2>
            </div>
            <div class="col-12 mt-5">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">ที่อยู่</th>
                    <th scope="col-4">เบอร์โทร</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["mid"]."</td>"."<td>".$row["name"]." ".$row["lastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["telephone"]."</td>"."<td>"."<a class='btn btn-warning' href='editbio.php?sid=".$row["mid"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
            </div>
        </div>
    </div>
</body>
