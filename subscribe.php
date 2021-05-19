<?php 

require_once 'connection.inc.php';

$email = $_POST['email'];

$success = 'Email has been subscribed!';

$query = "SELECT email FROM $table where email='$email'";
$result = $dbc->query($query);


if($result->num_rows > 0) {
    echo $success;

} else {
    $query = "INSERT INTO $table (email) VALUES ('$email')";
  
    mysqli_query($dbc, $query)
    or die ("error inserting email" . mysqli_error($dbc));
    
    echo "Your email has been added";
}

mysqli_close($dbc);


