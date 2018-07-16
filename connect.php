<?php
$local='localhost';
$user = 'root';
$pass = '';
$db = 'newdb';
$conn = new mysqli($local, $user, $pass, $db) or die("Unable to connect");
 
echo "Connect succesfully";

?>