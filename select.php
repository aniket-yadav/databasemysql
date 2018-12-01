<?php

require('init.php');
$sql_query="select * from users where name like 'akash'";

$result = mysqli_query($connection,$sql_query);

if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $name = $row['name'];
    $password =$row['password'];
    $college=$row['college'];
    $stream = $row['stream'];
    echo "name : $name<br>";
    echo "password : $password<br>";
    echo "college : $college<br>";
    echo "stream : $stream<br>";
}
else{
    echo 'error<br>';
}

?>