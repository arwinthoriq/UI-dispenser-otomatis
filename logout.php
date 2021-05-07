<?php
session_start();
session_destroy();

echo "<script>location='index.php';</script>";
//echo "<script>alert('anda telah logout');</script>";
?>