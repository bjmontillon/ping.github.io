<?php

$user = 'news';
$password = 'ak07028089';
$host = 'localhost';
$dbase = 'news';
$table = 'subscribers';

//connect to $dbase 

$dbc = mysqli_connect($host, $user, $password, $dbase)
    or die('cannot connect');
