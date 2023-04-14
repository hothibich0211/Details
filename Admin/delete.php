<?php
$id=$_GET['delete'];
include "Database.php";
$d= "DELETE FROM thanhvien WHERE id=$id";
mysqLi_query($conn,$d);
    header('location:show.php');

?>