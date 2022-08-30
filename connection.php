<?php
// A test for checking dbconnectivity
$dbhost = '162.241.85.66:3306';
// $portno = '3306';
$dbname= 'abakujob_pallotti';
$username = 'abakujob_pallotti';
$password = 'Pallotti@1';

$conn = mysqli_connect($dbhost,$username,$password,$dbname);

if(mysqli_connect_errno())
{
  echo '<h3>failed to Connect: '.mysqli_connect_error().'</h3>';
  exit();
}
else{
  echo '<h3>Database connected successfully!!!</h3>';
}
?>