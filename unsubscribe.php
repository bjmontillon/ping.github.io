<?php 

require_once 'connection.inc.php';

$email = $_POST['email'];

$query = " DELETE from $table where email='$email'";

$result = mysqli_query($dbc, $query)
or die("error removing email from data base" . mysqli_error($dbc));



mysqli_close($dbc);
