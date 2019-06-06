<?php $connect = mysqli_connect ('127.0.0.1', 'root', '', 'pasha_17ch');
$id = $_POST['del'];
$query = mysqli_query ($connect, "DELETE FROM tweet WHERE id='". $id . "'");
header('Location: http://pashanaumov/urok32/');
?>
