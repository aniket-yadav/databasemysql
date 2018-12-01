<?php
$server="localhost";
$user="root";
$password="";
$database="project";

$connection=mysqli_connect($server,$user,$password,$database);

if(!$connection){
    echo 'connection failed';
}
else
{
    echo "database connection  successful<br>";
}
?>