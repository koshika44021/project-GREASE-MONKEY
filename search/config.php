<?php

$con = mysqli_connect("localhost","root","","live_search");

if(!$con)
{
    echo "connection failed".mysqli_connect_error();
}
?>