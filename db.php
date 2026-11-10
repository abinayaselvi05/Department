<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "department_db"
);

if (!$conn) {
    die("Database Connection Failed");
}

session_start();
?>