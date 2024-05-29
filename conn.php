<?php
$sname = "localhost";
$uname = "root";
$pwd = "";
$dbname = "abp_test";
$conn = mysqli_connect($sname, $uname, $pwd, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>