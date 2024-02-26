<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>navbar admin</title>
  </head>
  <style>
    * {
      margin: 0;
      top: 0;
      box-sizing: border-box;
    }
    #navbar {
  position:relative;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 99;
  padding: 8px 100px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.5);
  background-color: black;
}
.navbar-brand {
  font-size: 25px;
  font-weight: 800;
  color: #10d410 !important;
}
#navbarSupportedContent a {
  color: white;
  border-bottom: 2px solid transparent;
}
#navbarSupportedContent a:hover {
  color: #10d410;
}
#navbarSupportedContent button {
  background: #10d410;
  width: 4rem;
  border-radius: 15px;
  
}
#navbarSupportedContent button:hover {
  background: #cccccc;
}
.dropdown-menu a {
  background-color: black !important;
}
.mx-auto-right {
    margin-right: auto !important;
}
.rightpadding{
    padding-right: 0.50rem;
}

</style>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">JBJ</a>
          <button class="navbar-toggler"type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu mx-auto-right">
              <li class="nav-item">
                <a class="nav-link" href="adminhome.php">Home</a>
              </li>  
             <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                    <div id="menuUl" class="dropdown-menu">     
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Employees</a>
                    <div id="emp" class="dropdown-menu"> 
                      
                    </div>
                </li>
          </ul>    
          <div class="rightpadding" id="navbarSupportedContent">
          <a  class="nav-link my-2"href="index.php">SignOut</a>
        </div> 
        <div id="navbarSupportedContent"> 
          <a  class="nav-link my-2"href="signup.php">SignUp</a>
        </div>    
        </div>
        
      </div>
  </nav>

 </body>
</html>
<script>
  let menuList = ["Breakfast", "Lunch", "Dinner"];
  let empList = ["Add", "Manage "];

  window.onload = function () {
    list = document.createElement("a");
    let menu = "";
    for (i = 0; i < menuList.length; i++) {
      menu = menu +
        '<a href="fooddetails.php?page='+menuList[i]+'" class="dropdown-item">' + menuList[i] + "</a>";
    }
    list.innerHTML = menu;
    document.getElementById("menuUl").appendChild(list);

    list1 = document.createElement("a");
    let emp = "";
    for (i = 0; i < empList.length; i++) {
      emp = emp +
        '<a href="fooddetails.php?page='+empList[i]+'" class="dropdown-item">' + empList[i] + "</a>";
    }
    list1.innerHTML = emp;
    document.getElementById("emp").appendChild(list1);

  }
  // let empList = ["Add", "Manage "];

  //   window.onload = function () {
  //   list = document.createElement("a");
  //   let emp = "";
  //   for (i = 0; i < empList.length; i++) {
  //     emp = emp +
  //       '<a href="fooddetails.php?page='+empList[i]+'" class="dropdown-item">' + empList[i] + "</a>";
  //   }
  //   list.innerHTML = emp;
  //   document.getElementById("empUl").appendChild(list);
  // }
  
  </script>
