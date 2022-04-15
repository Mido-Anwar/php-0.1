<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'medicalservice';

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {

    die(mysqli_connect_error());
    return false;
}

function db_insert($sql)
{
    global $conn;

    $result = mysqli_query($conn, $sql);

    if ($result) {

        return 'Added success';
    }
    return false;
}
