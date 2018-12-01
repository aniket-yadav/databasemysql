<?php
require("init.php");

$sql_query="update users SET stream ='science' where name='akash'";

$result =mysqli_query($connection,$sql_query);

if($result){
    echo "update successful ";

}
else
{
    echo " error";
}

?>