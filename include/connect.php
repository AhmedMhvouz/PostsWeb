<?php


if(! $conn= mysqli_connect('localhost','root',''))
{
    exit();
}else{
    
    mysqli_select_db($conn,"test");
}

?>