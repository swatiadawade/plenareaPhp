<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'plenareaphpmysql.mysql.database.azure.com';
$databaseName = 'test';
$databaseUsername = 'swatiplenarea@plenareaphpmysql';
$databasePassword = 'Temp4now$';

$con=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 

$mysqli = mysqli_real_connect($con, $databaseHost, $databaseUsername, $databasePassword, $databaseName, 3306);

//$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 if( ! $mysqli) {
    die('No connection: ' . mysqli_connect_error());
}
?>
