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
 #contactus {
  background: linear-gradient(to right,rgb(241, 157, 157),rgb(233, 156, 156) 100%);
}
form {
  display: flex;
  flex-direction: column;
}
#contactus input {
  margin: 10px 0px;
}
#contactus textarea {
  margin: 10px 0px;
}
.signin {
  background: #10d410 ;
  color:block;
  } 
</style>
<body id="contactus">
     <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="image/contact2.jpg" width="500px" height="400px"/>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <h1>CONTACT US</h1>
            <form id="contactus">
              <input
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter the Name"
              />
              <input
                type="email"
                class="form-control"
                name="email"
                placeholder="Enter the Email"
              />
              <input
                type="number"
                class="form-control"
                name="number"
                placeholder="Enter the Number"
              />
              <textarea
                class="form-control"
                name="msg"
                placeholder="Enter your Message"
              ></textarea>
              <button class="signin" name="s_msg">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </section>
</body>
</html>
<script>
  $('#contactus').submit(function(event){
    event.preventDefault();
    $.ajax({
      url:'ajax.php?action=contactus',
      method:'POST',
      data:$(this).serialize(),
      success:function(resp){
				if(resp == 1){
					 alert("Data saved successfully.");
           location.href ='contactus.php';
				}
        
			}

    })
  })
</script>