<?php 
include('DBCONNECT.php');
if(isset($_GET['id'])){
    $query="";
    $query="select * from food_details where food_id=".$_GET['id'];
    $res = $con->query($query);
    foreach($res->fetch_array() as $k => $val){
        $$k=$val;
    }
}
?>

        <input type="hidden" name="food_id" value="<?php echo isset($food_id) ? $food_id : '' ?>">
        <h2>Edit Food Price</h2>
        <div class="addnew">
        <label><b>Food name</b></label>
        <input type="text" autocomplete="off" name="food_name" disabled value="<?php echo isset($food_name) ? $food_name :'' ?>" required>

        <label><b>Food Price</b></label>
        <input type="number" name="food_price" value="<?php echo isset($food_price) ? $food_price :'' ?>" required>

        <button type="button" class="btn cancel" onclick="closeEditForm()">Cancel</button>
        <button type="submit" class="btn">Update</button>
      </div>
   
