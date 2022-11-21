<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbase = 'siswsrpl';

$conn = mysqli_connect($servername, $username, $password, $dbase);

if (!$conn) {
    echo "connection failed: " . mysqli_connect_error();
}