<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "toor";
$db_name = "c200";
$link = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$link) {
    die(mysqli_error($link));
}
