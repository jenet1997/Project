
<?php
include("header.php");
include("DBCONNECT.php");
include("navbaradmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* .foodtable{
     position:fixed;
     top:250px;
     left:300px;
     width:300px;
     height:200px;
     border: 2px solid black;
     padding:15px;
    } */

    /* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  top: 20%;
  left: 35%;
  border: 3px solid #f1f1f1;
  z-index: 9;
  height: 400px;
}

.form-popup1 {
  display: none;
  position: fixed;
  bottom: 0;
  top: 20%;
  left: 35%;
  border: 3px solid #f1f1f1;
  z-index: 9;
  height: 400px;
}

/* Add styles to the form container */
.form-container {
  max-width: 400px;
  max-height:400px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 47%;
  margin-bottom:10px;
  margin-left:7px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    
</style>

<body>
  <div class="card-body" style="padding: 7%;">
        <div>
        <input type="button" onclick="openForm()"  value="Add new item">
        </div>

    <div class="form-popup" id="myForm">
          <form  id="addnew" class="form-container">
        <h2>Add New Food</h2>
      <div class="addnew">
        <label><b>Food name</b></label>
        <input type="text" placeholder="Enter Food name" autocomplete="off" name="fname" required>

        <label><b>Food Price</b></label>
        <input type="number" placeholder="Enter Food Price" name="fprice" required>

        <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
        <button type="submit" class="btn">Save</button>
      </div>
         </form>
    </div>
    <div class="form-popup1" id="myFormEdit">
      <form  id="editFood" class="form-container">
      </form>
    </div>
 </div>
   <div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center">Food Id</th>
                    <th class="text-center">Food Name </th>
                    <th class="text-center">Food Price </th>
                    <th class="text-center">Action</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                //get the selected menu item from url
                    $page = isset($_GET['page'])? $_GET['page'] :'Breakfast';
                    $i = 1;
                    $foodDetails = $con->query("select food_id, food_name, food_price from food_details WHERE menu_id = (select menu_id from menu_list where menu_name ='".$page."')");
                //looping for get the data from table   
                    while($row = $foodDetails->fetch_assoc()):
                ?>
                <tr>
                  <!-- <td class="text-center"> </td> -->
                  <td class="text-center"><?php echo $i++ ?></td>
                  
                    <td class="text-center"> <?php echo $row['food_name']?> </td>
                    <td class="text-center"> <?php echo $row['food_price']?> </td>
                    <td class="text-center">
										<input class="btn btn-sm btn-outline-primary edit_food"  onclick="edit_food(<?php echo $row['food_id'] ?>)"  type="button"value="Edit" >
										<input class="btn btn-sm btn-outline-danger delete_food" onclick="delete_food(<?php echo $row['food_id'] ?>)"  type="button" value="Delete">
									</td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        </div>
   

   
</body>
</html>
<script>
  function openForm() {
      document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
      document.getElementById("myForm").style.display = "none";
  }

  function openEditForm(){
    document.getElementById("myFormEdit").style.display = "block";
  }

  function closeEditForm() {
      document.getElementById("myFormEdit").style.display = "none";
  }
  
  $('#addnew').submit(function(event){
    //Clicking on a "Submit" button, prevent it from submitting a form 
    //meaning that the default action that belongs to the event will not occur.
   event.preventDefault()      
   if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();

    $.ajax({
			url:'addfood.php?selectedmenu=<?php echo $page ?>',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
			console.log(err)
        $('.addnew').prepend('<div class="alert alert-danger">Error.</div>')
			},
			success:function(resp){
				if(resp == 1){
					 $('.addnew').prepend('<div class="alert alert-danger">Item is already exist.</div>')
				}
        else{
          alert("Saved successfully.");
          location.href ='fooddetails.php?page=<?php echo $page ?>';
          
				}
			}
		})

  });
  
  //delete_food
    
function delete_food(food_id){
  
  $.ajax({
    url:'deletefood.php?action=deletefood',
    method:'POST',
    data:{id:food_id},
    success:function(resp){
      if(resp==1 ){
        alert("Data successfully deleted",'success');
        location.href ='fooddetails.php?page=<?php echo $page ?>';
      }
    }
  })
}

//Edit food

function edit_food(food_id){
  
  $.ajax({
    url:'editfood.php?id=' + food_id,
    method:'POST',
    data:{id:food_id},
    success:function(resp){

      if(resp){
        openEditForm();
        $('#editFood').html('');
        $('#editFood').append(resp);
      }
    }
  })
}

 $('#editFood').submit(function(event){
   event.preventDefault()      
   if($(this).find('.alert-danger').length > 0 )
	    $(this).find('.alert-danger').remove();

    $.ajax({
			url:'deletefood.php?action=editfood',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
			console.log(err)
        $('#editFood').append('<div class="alert alert-danger">Error.</div>')
			},
			success:function(resp){
				if(resp == 1){
          alert("Updated successfully.");
          location.href ='fooddetails.php?page=<?php echo $page ?>';
				}
        else{   
          $('#editFood').append('<div class="alert alert-danger">Error.</div>')
				}
			}
		})

  });
    
</script>