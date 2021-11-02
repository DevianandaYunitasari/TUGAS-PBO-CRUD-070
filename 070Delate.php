<?php
include '070Database.php';
$db = new database();
$id = $_REQUEST['id'];
$delete = $db->delete($id);

if($delete){
    echo "<script>alert('Data Telah Terhapus!');</script>";
		echo "<script>window.location.href = '070Home.php';</script>";
}
?>