<?php
include("DBCONNECT.php");

$action = $_GET['action'];
if($action == 'login'){
    extract($_POST);
    $query="";
    $query="select * from signUp_table where Username='".$uname."' and Password = '".$upass."' ";
    $res = $con->query($query);
    if($res->num_rows > 0)
    {
        echo 1;
    }
    else{
        echo 2;
    }
}


if($action == 'signup'){
    extract($_POST);
    $query="";
    $query="select * from signUp_table where Username='".$uname."' ";
    $res = $con->query($query);
    if($res->num_rows > 0)
    {
        
        echo 1;
    }
    else{ 
        $query="";
        $query="insert into signup_table values('$uname','$upass','$cpass')";
        $con->query($query);
        echo 2;
    }
}
if($action=='contactus'){
    extract($_POST);
    $query="";
        $query="insert into contactus_table values('$name','$email','$number','$msg')";
        $con->query($query);
        echo 1;

}
?>



