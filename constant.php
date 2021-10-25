<?php
if(!isset($_SESSION)){
    session_start();
}

$conn = mysqli_connect('localhost','root','','kiemtra_gk');
if(!$conn){
    die('khong the ket noi');
}

?>