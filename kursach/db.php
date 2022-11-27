<?php

$server = "127.0.0.1";
$login = "root";
$password = "";
$name_db = "menubd";

$link = mysqli_connect($server, $login, $password, $name_db);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}



?> 