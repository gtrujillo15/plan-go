<?php
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysql_select_db($connection, 'users');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}