<?php
session_start();
$host = "localhost"; /* Host name */
$user = "alexc"; /* User */
$password = "21116"; /* Password */
$dbname = "supermercado"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}