<?php

require('init.php');

//$name="akash";
//$password="akash123";
//$college="sk";
//$stream="ssc";

$name=$_POST['name'];
$password=$_POST['password'];
$college=$_POST['college'];
$stream=$_POST['stream'];

$sql_query="insert into users values('$name','$password','$college','$stream')";

$result=mysqli_query($connection,$sql_query);
if($result)
{
    echo " data inserted<br>";
}
else{
    echo "error<br>";
}

?>