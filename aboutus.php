<?php
include("header.php");
include("navbaruser.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
section {
  width: 100%;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
} 
#aboutus {
  background: linear-gradient(to right,rgb(235, 90, 90),rgb(231, 83, 83) 100%);
}
#aboutus h1 {
  font-weight: 800;
  font-size: 50px;
  color: #101111;
}
#aboutus p {
  color: #223a23;
}

.float-left{
  float:left;
}

</style>
<body id="aboutus">
    <section>
      <div class="container-fluid">
        <div class="=row">
          <div class="col-lg-6 col-md-6 col-12 p-lg-5 p-2 my-5 float-left">
            <img src="image/home1.jpg" class="img-fluid"  width="500px" height="700px"/>
          </div>
          <div class="col-lg-6 col-md-6 col-12 p-lg-5 p-2 my-5 float-left">
            <h1>ABOUT US</h1>
            <p>
              When we put food in our stomach, we have a choice, to hurt or help
              our body. Why not make the next meal a healthy one? Yes, there are
              many restaurants to enjoy in Corvallis, but few that offer a
              nutritional menu that leaves us wanting more. There is a hidden
              restaurant behind Circle K a convenience store on Monroe Avenue
              that looks more like a house or community center than a
              restaurant. Located at 109 N.W. 15th Street is a wonderful place
              to eat called Nearly Normal. This is one of the finest choices to
              purchase a meal in Corvallis. We will examine the experience at
              this vegetarian restaurant focusing on the style of atmosphere,
              service, food quality and cleanliness.
            </p>
          </div>
        </div>
      </div>
    </section>
</body>
</html>