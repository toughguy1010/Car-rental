<?php
include('config/header.php');
include('config/constant.php');

?>
<div class="container">
    <div class="row">
        <div class="col-12">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label"> Biển số xe</label>
                <input type="text" class="form-control" id="license_no" name="license_no" >  
            </div>
            <div class="mb-3">
                <label class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" >  
            </div>
            <div class="mb-3">
                <label class="form-label"> Year</label>
                <input type="text" class="form-control" id="year" name="year" >  
            </div>
            <div class="mb-3">
                <label class="form-label">Loại xe</label>
                <input type="text" class="form-control" id="ctype" name="ctype" >  
            </div>
            <div class="mb-3">
                <label class="form-label">Giá cho thuê theo ngày</label>
                <input type="text" class="form-control" id="drate" name="drate" >  
            </div>
            <div class="mb-3">
                <label class="form-label"> Giá cho thuê theo tuần</label>
                <input type="text" class="form-control" id="wrate" name="wrate" >  
            </div>
            <div class="mb-3">
                <label class="form-label"> Trạng thái</label>
                <input type="text" class="form-control" id="status" name="status" >  
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Thêm </button>
        </form>
        </div>
    </div>
</div>



<?php
if(isset($_POST['submit'])){
    $license_no =$_POST['license_no'];
    $model =$_POST['model'];
    $year =$_POST['year'];
    $ctype =$_POST['ctype'];
    $drate =$_POST['drate'];
    $wrate =$_POST['wrate'];
    $status =$_POST['status'];
    echo $sql= "INSERT INTO`dbcars`(`license_no` , `model` , `year` , `ctype` , `drate` , `wrate` , `status`)
    VALUES ('$license_no ',' $model ',' $year ',' $ctype ',' $drate ',' $wrate ',' $status ')";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['noti']= "Đã thêm thành công";
        header("location:index.php");
    }else{
        $_SESSION['noti'] =" Lỗi!!!!";
        header("location:error.php");
    }

}


include('config/footer.php');

?>