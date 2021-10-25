<?php
    include("config/constant.php");
    $vehicle_id = $_GET['vehicle_id'];

     $sql ="DELETE FROM `dbcars` WHERE vehiclse_id = $vehicle_id";
    $result = mysqli_query($conn,$sql);

    if($result){
        $_SESSION['noti']= "Đã xóa";
        header("location:index.php");
    }else{
        $_SESSION['noti'] =" Lỗi!!!!";
        header("location:error.php");
    }



?>