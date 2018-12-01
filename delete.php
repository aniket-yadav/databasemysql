<?php
require("init.php");

$sql_query="delete from users where name='aniket'";

$result=mysqli_query($connection,$sql_query);

if($result){
    echo "deleted successfully<br>";
}
else
{
    echo "error<br>";
}


?>