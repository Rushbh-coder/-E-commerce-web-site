<?php

include('./includes/connect.php');
include('./function/common_function.php');
// Include the file containing getIPAddress() function
//include 'path/to/your/file.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce website using the php and mysql</title>
    <!--boostrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
      .logo{
    width: 4%;
    height: 4%;
            }
.card-img-top{
    width: 100%;
    height: 200px;
    object-fit: contain;
}
    </style>


  </head>
<body>
    <!--navebar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
  <img src="./image/logo.jpg" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-ite gm">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display.php">product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">register</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link" href="#">contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">total amount:</a>
        </li>
        
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="search_data_product?search_data" name="search_data">
      <!--<button class="btn btn-outline-light" type="submit">search</button>-->
      <input type="submit" name="search_data_product"class="btn btn-outline-light" value="search">
        
      </form>
    </div>
  </div>
</nav>
<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">welcome guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">login</a>
        </li>
        
        
  </ul>
</nav>
<!--third child-->
<div class="bg-light">
  <h3 class="text-center">hidden store</h3>
  <p class="text-center">communication is the heart of the ecomerce-website</p>

</div>
    
    <!--fourth child-->
    <div class="row p-3">
      <div class="col-md-10">
        <!-- product-->
        <div class="row">
        <?php
      getproducts();
      //get_uniq_products();
      get_uniq_categories();
      //get_uniq_brands();
      get_uniq_brands();
      //search_product();
     // get_search_product();
    $ip = getIPAddress();  
echo 'User Real IP Address - '.$ip;  

?>      </div>
        </div>
      <div class="col-md-2 bg-secondary p-0">

          <ul class="navbar-nav me-auto">
            <li class="nav-item bg-info">
              <a href="#" class="nav-link text-center text-light"><h4>Delivery brand</h4></a>

            </li>
            <?php
            getbrands();
            
            
            ?>
            
          </ul>
          <ul class="navbar-nav me-auto">
            <li class="nav-item bg-info">
              <a href="#" class="nav-link text-center text-light"><h4>category</h4></a>
            </li>
            <?php
            getcategories();
            ?>
            
          
          
          </ul>
          
          
        
      </div>
    </div>
    <!--!last child-->
    <?php
    include('./includes/footer.php');
  ?>
  
    <!--javascript language -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>