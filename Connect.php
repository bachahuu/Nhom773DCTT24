<?php
 $servername='localhost';
 $user='user001';
 $pass='1';
 $db='quanlyhosonhansu_db';
 $conn=mysqli_connect($servername,$user,$pass,$db);
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
    // Cài đặt charset là utf8mb4 cho kết nối
mysqli_set_charset($conn, "utf8mb4");
?>