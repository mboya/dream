<?php
include 'config.php';
$connection = mysql_connect(HOST, USER, PASSWORD) or die ('Error Connecting to the Specified SERVER '.mysql_error());
mysql_select_db(DATABASE, $connection) or die ('Error selecting the DATABASE '.mysql_error());
?>