<?php
  $connection = mysqli_connect("localhost","root","","Admin");
if ($connection) {
echo ('connected');
}
else{
    die("Connection failed: " . mysqli_connect_error());
}
?>