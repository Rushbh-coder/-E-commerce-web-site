<?php
  include('../includes/connect.php');
  
  if(isset($_POST['insert_cat'])) {
    $categories_title = $_POST['cat_title'];
    
    $select_query = "SELECT * FROM `categories` WHERE categories_title='$categories_title'";
    $result = mysqli_query($con, $select_query);
    
    if($result) {
      $number = mysqli_num_rows($result);
      
      if($number > 0) {
        echo "<script>alert('This is already present in the list.')</script>";
      } else {
        $insert_query = "INSERT INTO `categories` (`categories_title`) VALUES ('$categories_title')";
        $insert_result = mysqli_query($con, $insert_query);
        
        if($insert_result) {
          echo "<script>alert('Category inserted successfully.')</script>";
        } else {
          echo "Error: " . mysqli_error($con);
        }
      }
    } else {
      echo "Error: " . mysqli_error($con);
    }
  }
?>


<h1 class="text-center">Insert categoties</h1>
<form action="" method="post" class="mb-2">
<div class="input-group mb-3">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="insert categories" aria-label="categories" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-2 width-10 m-auto">
  <input type="submit" class="bg-info p-2 my-3 border-0" value="insert category" name="insert_cat">
</div>
</form>














