<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "test";
try
{
    $conn = mysqli_connect($server,$username,$password,$dbname);
}
catch(MySQLi_Sql_Exception $ex)
{
    echo("Error connection");
}
?>