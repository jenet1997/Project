<?php
 include("header.php");
 include("backround.php");
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
.signInDiv {
  position: fixed;
  width: 450px;
  height: 400px;
  margin-top:150px;
   z-index: 3;
  background: white;
  border: 2px solid rgba(255, 255, 255, 0.5);
}
.signInDiv1 {
  width: 100%;
  padding: 0px 40px 40px 40px;
  }
  .icon-close {
  position: absolute;
  top: 0;
  right: 0;
  width: 45px;
  height: 40px;
  background: #162938;
  font-size: 2em;
  color: #cccccc;
  display: flex;
  justify-content: center;
  align-items: center;
  border-bottom-left-radius: 20px;
  cursor: pointer;
  z-index: 1;
}
h2 {
  font-size: 2em;
  color: #162938;
  text-align: center;
  padding-top: 20px;
}
.input-box {
  position: relative;
  width: 100%;
  height: 60px;
  border-bottom: 2px solid #162938;
  margin: 30px 0;
}
.input-box label {
  position: absolute;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
  font-size: 1em;
  color: #162938;
  font-weight: 500;
  pointer-events: none;
  transition: 0.5s;
}
.input-box input:focus ~ label,
.input-box input:valid ~ label {
  top: -5px;
}
.input-box input {
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color: #162938;
  font-weight: 600;
  padding: 0 35px 0 5px;
}
.loginform
 {
    width: 30%;
    height: auto;
    margin: 7% auto;
    padding: 25px 10px;
}
 @media screen and (max-width: 600px) {
.loginform {
     width: 90%;
    margin: 35% auto;
    }
      }
.btn-login {
  width: 100%;
  height: 40px;
  background: #162938;
  border-radius: 6px;
  font-size: 1em;
  color: #cccccc;
  font-weight: 500;
}

</style>
<body>
  <div class="loginform">
  <form id="login-form">
    <div class="signInDiv" id="signInDiv">
      <span class="icon-close" onclick="loginClose()">X</span>
      <div>
        <h2>Login</h2>
      </div>
      <div class="signInDiv1">
        <div class="input-box">
          <input type="text" name="uname" id="uname" autocomplete="off" required />
          <label>User Name <span style="color:red">*</span></label>
        </div>

        <div class="input-box">
          <input type="password" name="upass" id="upass" required />
          <label>Password <span style="color:red">*</span></label>
        </div>

        <div>
          <button class="btn-login">Signin</button>
        </div>
      </div>
    </div>
</form>
</div>
</body>
</html>
<script>
  $('#login-form').submit(function(event){
    //Clicking on a "Submit" button, prevent it from submitting a form 
    //meaning that the default action that belongs to the event will not occur.
   event.preventDefault()      
   if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();

    $.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
			console.log(err)
        $('.signInDiv1').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
			},
			success:function(resp){
				if(resp == 1){
					location.href ='adminhome.php';
				}else{
					$('.signInDiv1').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
				}
			}
		})

  });
  function loginClose() {
  document.getElementById("signInDiv").style.display = "none";
}
 
</script>

