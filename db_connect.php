<?php

$host = "127.0.0.1";
$hostuser = "root";
$hostpass = "";
$db_name = "cms";

$connection = mysqli_connect($host, $hostuser, $hostpass, $db_name);

if($connection){
    echo "Connected to Database Successfully";
}else{
    echo "Connection to Database Failed";
}

?>