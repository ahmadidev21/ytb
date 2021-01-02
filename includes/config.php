<?php

ob_start(); //Turn on output buffering

date_default_timezone_set("Asia/Tehran");

try {
    $con = new PDO("mysql:dbname=vdeotube;hosts=localhost;", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo "connection faild: ". $e->getMessage();
}
?>
