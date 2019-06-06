<?php $connect = mysqli_connect('127.0.0.1', 'root', '' , 'pasha_17ch');
$query = mysqli_query($connect, "UPDATE tweet SET post_text='".$_POST['update']."' WHERE id='".$_POST['update1']."'");
header('Location: http://pashanaumov/urok32/');?>