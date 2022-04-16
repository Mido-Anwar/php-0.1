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
// get reows from database

function getrow($table, $field, $value)
{

    global $conn;

    $sql = "SELECT * FROM `$table` WHERE `$field` = '$value'";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        $rows = [];

        if (mysqli_num_rows($result) > 0) {

            $rows[] = mysqli_fetch_assoc($result);
        }

        return $rows[0];
    }

    return false;
}
