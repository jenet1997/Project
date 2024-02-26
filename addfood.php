<?php
include("DBCONNECT.php");

$menuName = $_GET['selectedmenu'];

    extract($_POST);
    $query="";
    $query="select * from food_details where LOWER(food_name)=LOWER('".$fname."') and menu_id = (select menu_id from menu_list where menu_name = '".$menuName."') ";
    $res = $con->query($query);
    if($res->num_rows > 0)
     {
        
        echo 1;
    }
     else{ 
        $query="";
        $query="insert into food_details (menu_id, food_name, food_price) values ((select menu_id from menu_list where menu_name = '".$menuName."'),'$fname',$fprice)";
        $con->query($query);
        echo 2;
     }

    ?>