<?php

include_once 'config.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM siswa WHERE id=$id");
header('location: index.php');