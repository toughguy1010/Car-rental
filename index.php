<?php
    include("config/header.php");
    include("config/constant.php");
?>
<div class="container">
    <h1 class="text-center">Danh sách cho thuê xe</h1>
    <?php
    if(isset($_SESSION['noti'])){
        echo $_SESSION['noti'];
        unset($_SESSION['noti']);
    }

    ?>
    <br>
    <a href="add.php" class="add">Thêm</a>
    <table class="table ">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Biển số xe</th>
        <th scope="col">Model</th>
        <th scope="col">Năm sản xuất</th>
        <th scope="col">Kiểu oto</th>
        <th scope="col">Giá cho thuê theo ngày</th>
        <th scope="col">Giá cho thuê theo tuần</th>
        <th scope="col">Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM dbcars";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result )>0){
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
        <th scope="row"><?php echo $i; ?></th>
        <th scope="col"><?php echo $row['license_no']; ?></th>
        <th scope="col"><?php echo $row['model']; ?></th>
        <th scope="col"><?php echo $row['year']; ?></th>
        <th scope="col"><?php echo $row['ctype']; ?></th>
        <th scope="col"><?php echo $row['drate']; ?></th>
        <th scope="col"><?php echo $row['wrate']; ?></th>
        <th scope="col"><?php echo $row['status']; ?></th>
        <th scope="col"><a href="edit.php?vehicle_id=<?php echo $row['vehicle_id'];?>"> Edit</a> </th>
        <th scope="col"><a href="delete.php?vehicle_id=<?php echo $row['vehicle_id'];?>"> Delete</a> </th>

        
        </tr>
        <?php


                    $i++;
                }
            }
        ?>
    </tbody>
    </table>
    <p><a href="chitiet.php">Chi tiết</a></p>
</div>



<?php
    include("config/footer.php")
?>