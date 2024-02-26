<?php
include('DBCONNECT.php');


$action=$_GET['action'];
if($action === 'deletefood'){
 extract($_POST);
    $query="";
    $query="delete from food_details where food_id=".$id;
    $res = $con->query($query);
    if($res){
        echo 1;
    }
}
if($action === 'editfood'){
   extract($_POST);
    $query="";
    $query="update food_details set food_price = '".$food_price."' where food_id=".$food_id;
    $res = $con->query($query);
    if($res){
        echo 1;
    } 
}
?>