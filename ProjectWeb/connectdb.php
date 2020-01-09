<?php
// Create a connection to the msgboarddb database and to MySQL
// Set the encoding to utf-8
// Set the database access details as constants
DEFINE ('DB_USER', 'root'); // or whatever userid you created
DEFINE ('DB_PASSWORD', ''); // or whatever password you created
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'projectweb');

// Make the connection:
$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Set the encoding...optional but recommended
if(!$dbcon){
    die('fail cmnr');
}
?>