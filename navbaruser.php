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
  position: fixed;
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

.mx-auto-right {
    margin-right: auto !important;
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
          <ul class="navbar-nav mx-auto-right">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact us</a>
            </li>
            </ul> 
            <div id="navbarSupportedContent">
              <a  class="nav-link my-2" onclick="signin()" href="login.php">Signin</a>
          </div>   
    </div>
</div>
</nav>
 </body>
</html>
