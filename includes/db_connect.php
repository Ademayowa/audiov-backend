<?php 

$conn = mysqli_connect('localhost', 'root', '', 'test1');

if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

?>
