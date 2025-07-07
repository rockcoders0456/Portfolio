<?php
include 'conn.php';
$ids = $_GET['id'];

$delete = "DELETE FROM `data` WHERE id = '$ids' ";
$query = mysqli_query($conn, $delete);  

header('location:view.php');
?>