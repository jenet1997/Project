<?php
$server="localhost";
$user="root";
$pass="";
$database='jbj_food_court';
$con=new mysqli($server,$user,$pass,$database);

if(!isset($con))
{
    die("Database Not Found");
}

?>